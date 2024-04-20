<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Subject;
use App\Models\User;
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $subjects= Subject::with('user')->get();
        return view('backend.subject.index', compact('subjects'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $admins = User::all();
        return view('backend.subject.create', ['admins' => $admins]); // Pass the $admins variable to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        // dd($input);
         Parents::create($input);
        return redirect('subject')->with('flash_message', 'Subject Addedd Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $subjects = Subject::find($id);
        return view('backend.subject.show')->with('subjects', $subjects);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $subjects = subject::find($id);
        return view('backend.subject.edit')->with('subjects', $subjects);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $subjects = Subject::find($id);
        // dd($parent);
        $input = $request->all();
        $subjects->update($input);
        return redirect('subject')->with('flash_message', 'subject Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Subject::destroy($id);
        return redirect('subject')->with('flash_message', 'subject deleted Successfully');
    }
}
