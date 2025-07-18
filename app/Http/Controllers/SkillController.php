<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Student;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::with('student')->get();
        return view('admin.Skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('admin.Skill.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required|string|max:255',
            'procent' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($validated);

        return redirect()->route('skills.index')->with('success', 'Skill qo‘shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.Skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $students = Student::all();
        return view('admin.Skill.edit', compact('skill', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required|string|max:255',
            'procent' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($validated);

        return redirect()->route('skills.index')->with('success', 'Skill yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill o‘chirildi!');
    }
}
