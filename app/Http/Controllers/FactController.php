<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Student;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facts = Fact::with('student')->get();
        return view('admin.Fact.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('admin.Fact.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required|string|max:255',
            'count' => 'required|integer|min:0',
        ]);

        Fact::create($validated);

        return redirect()->route('facts.index')->with('success', 'Fact successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fact $fact)
    {
        $fact->load('student');
        return view('admin.Fact.show', compact('fact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fact $fact)
    {
        $students = Student::all();
        return view('admin.Fact.edit', compact('fact', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fact $fact)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required|string|max:255',
            'count' => 'required|integer|min:0',
        ]);

        $fact->update($validated);

        return redirect()->route('facts.index')->with('success', 'Fact successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fact $fact)
    {
        $fact->delete();
        return redirect()->route('facts.index')->with('success', 'Fact successfully deleted!');
    }
}
