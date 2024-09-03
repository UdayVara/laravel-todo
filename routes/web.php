<?php

use App\Http\Controllers\todo;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[todo::class,"getTodo"]);
Route::get("/edit/{id}",[todo::class,"editTodo"])->name("edit_todo");
Route::get("/add", function () {
    return view("add");
});


Route::Post("/add-todo",[todo::class,"addTODO"]);
Route::Post("/edit-todo/{id}",[todo::class,"editTodoAPi"])->name("edit_todo_api");
Route::Get("/delete-todo/{id}",[todo::class,"deleteTODOApi"])->name("delete_todo_api");