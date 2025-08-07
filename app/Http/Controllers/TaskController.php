<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
    'task' => 'required|max:100|min:5',
]);


        // Create and save task
        $task = new Task;
        $task->task = $request->task;
        $task->save();

        // Fetch all tasks
        $data = Task::all();

        // Return the tasks view with updated list
        return view('tasks')->with('tasks', $data);
    }

    public function UpdateTaskAsCompleted($id)
    {
        $task = Task::find($id);
        $task->isCompleted = 1;
        $task->save();

        $data = Task::all();
        return view('tasks')->with('tasks', $data);
    }

    public function UpdateTaskAsNotCompleted($id)
    {
        $task = Task::find($id);
        $task->isCompleted = 0;
        $task->save();

        $data = Task::all();
        return view('tasks')->with('tasks', $data);
    }
    public function deletetask($id)
    {
        $task = Task::find($id);
        
        $task->delete();

        $data = Task::all();
        return redirect()->back();
    }
    public function updatetaskview($id)
    {
        $task = Task::find($id);
        
        return view ('updatetask')->with('taskdata',$task);
    }

    public function updatetask(Request $request)
{
    $id = $request->id;
    $taskData = Task::find($id);

    $taskData->task = $request->task; // assign directly from request
    $taskData->save();

    $data = Task::all();
    return view('tasks')->with('tasks', $data);
}

}
