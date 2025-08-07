<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

Route::get('/', function () {
    return view ('welcome');
});
   
Route::get('/tasks', function (){
$data = Task::all();

    return view('tasks')->with('tasks',$data);
});
   
Route::post('/saveTask', [TaskController::class, 'store']);

Route::get('/markascompleted/{id}', [TaskController::class, 'UpdateTaskAsCompleted']);
Route::get('/markasnotcompleted/{id}', [TaskController::class, 'UpdateTaskAsNotCompleted']);
Route::get('/deletetask/{id}', [TaskController::class, 'deletetask']);
Route::get('/updatetask/{id}', [TaskController::class, 'updatetaskview']);
Route::post('/updatetasks', [TaskController::class, 'updatetask']);