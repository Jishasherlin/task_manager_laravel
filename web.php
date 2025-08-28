<?php


use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddTaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('task', TaskController::class);
Route::patch('/task/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::post('/task/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::get('/tasks/completed', [TaskController::class, 'completed'])->name('tasks.completed');
Route::get('/tasks/pending', [TaskController::class, 'pending'])->name('tasks.pending');



Route::get('addtask', [AddTaskController::class, 'index'])->name('addtask');
