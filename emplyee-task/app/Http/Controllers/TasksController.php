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
}
