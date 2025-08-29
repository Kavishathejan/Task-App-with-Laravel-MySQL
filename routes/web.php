<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () { return view('welcome'); });

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/saveTask', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/markascompleted/{id}', [TaskController::class, 'UpdateTaskAsCompleted'])->name('tasks.complete');
    Route::get('/markasnotcompleted/{id}', [TaskController::class, 'UpdateTaskAsNotCompleted'])->name('tasks.notcomplete');
    Route::get('/deletetask/{id}', [TaskController::class, 'deletetask'])->name('tasks.delete');
    Route::get('/updatetask/{id}', [TaskController::class, 'updatetaskview'])->name('tasks.edit');
    Route::post('/updatetasks', [TaskController::class, 'updatetask'])->name('tasks.update');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
});
