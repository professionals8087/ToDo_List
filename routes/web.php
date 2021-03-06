<?php

use App\Http\Controllers\ToDoController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/********************** START **********************/
Route::get('/list', [ToDoController::class, "ListToDo"])->name('list');
Route::get('/show/{id}', [ToDoController::class, "ShowToDo"]);
Route::post('/store', [ToDoController::class, "StoreToDo"])->name('store');
Route::get('/delete/{id}', [ToDoController::class, "DeleteToDo"]);
Route::get('/update/{id}', [ToDoController::class, "UpdateToDO"]);
Route::post('/edit/{id}', [ToDoController::class, "EditToDo"])->name('edit');
/********************** END **********************/
