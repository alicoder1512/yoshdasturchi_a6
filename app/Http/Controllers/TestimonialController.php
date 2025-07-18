<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::with('student')->get();
        return view('admin.Testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('admin.Testimonial.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'position' => 'nullable|string|max:255',
            'start_count' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('testimonials/photos', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        $testimonial->load('student');
        return view('admin.Testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        $students = Student::all();
        return view('admin.Testimonial.edit', compact('testimonial', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'position' => 'nullable|string|max:255',
            'start_count' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            // eski rasmni o‘chirish
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }

            $validated['photo'] = $request->file('photo')->store('testimonials/photos', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }
}
