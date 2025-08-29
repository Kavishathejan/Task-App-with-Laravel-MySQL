<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('tasks')->with('tasks', $tasks);
    }

    public function store(Request $request)
    {
        $request->validate(['task' => 'required|max:100|min:5']);

        Task::create([
            'task' => $request->task,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.index');
    }

    public function UpdateTaskAsCompleted($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $task->isCompleted = 1;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function UpdateTaskAsNotCompleted($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $task->isCompleted = 0;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function deletetask($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $task->delete();

        return redirect()->route('tasks.index');
    }

    public function updatetaskview($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('updatetask')->with('taskdata', $task);
    }

    public function updatetask(Request $request)
    {
        $request->validate(['task' => 'required|max:100|min:5']);

        $task = Task::where('id', $request->id)->where('user_id', Auth::id())->firstOrFail();
        $task->task = $request->task;
        $task->save();

        return redirect()->route('tasks.index');
    }
}
