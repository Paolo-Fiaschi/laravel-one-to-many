<?php

namespace App\Http\Controllers;
use App\Task;
use App\Employee;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('show', compact('task'));
    }
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task -> delete();
        return redirect() -> route('home');
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $employees = Employee::all();
        return view('edit', compact('task', 'employees'));
    }
    public function update(Request $request, $id)
    {
        // dd($request-> all());
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'employee_id' => 'required'
        ]);
        // dd($validatedData);
        Task::whereId($id) -> update($validatedData);
        return redirect() -> route('home');
    }



}
