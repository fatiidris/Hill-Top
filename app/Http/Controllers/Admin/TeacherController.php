<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\View\View;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        
        $teachers= Teacher::with('user')->get();
        
        return view('backend.teacher.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $admins = User::all();
        return view('backend.teacher.create')->with('admins', $admins);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message', 'teachers Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teachers = Teacher::find($id);
        return view('backend.teacher.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teachers = Teacher::find($id);
        return view('backend.teacher.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teacher')->with('flash_message', 'teachers Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'Teacher deleted');
    }
}
