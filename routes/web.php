<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/todos', 'TodoController@index')->name('todos.index');
// Route::get('/todos/create', 'TodoController@create')->name('todos.create');
// Route::post('/todos', 'TodoController@store')->name('todos.store');
// Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todos.edit');
// Route::put('/todos/{todo}', 'TodoController@update')->name('todos.update');
// Route::delete('/todos/{todo}', 'TodoController@destroy')->name('todos.destroy');
// List all todos
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Show form to create a new todo
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Store a new todo
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// Show form to edit an existing todo
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// Update an existing todo
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

// Delete a todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

Route::get('/', function () {
    return view('welcome');
});
