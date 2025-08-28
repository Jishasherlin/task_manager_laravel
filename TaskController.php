<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
  // app/Http/Controllers/TaskController.php


public function index()
{
    $tasks = Task::orderByDesc('created_at')->get();
    return view('task', compact('tasks')); // NOT 'task' !
}

public function store(Request $request)
{
    $request->validate(['task' => 'required|string|max:255']);
    Task::create(['title' => $request->task]); // default status = Pending
    return back()->with('success', 'Task added!');
}

public function complete(Task $task)
{
     
    $task->update(['completed' => 1]);
    return back()->with('success', 'Task completed!');
}

public function destroy(Task $task)
{
    $task->delete();
    return back()->with('success', 'Task deleted!');
}
public function completed()
{
    // Fetch only completed tasks
    $tasks = Task::where('completed', 1)->get();

    return view('task', compact('tasks'));
}
public function pending()
{
    // Fetch only completed tasks
    $tasks = Task::where('completed', 0)->get();

    return view('task', compact('tasks'));
}
}


