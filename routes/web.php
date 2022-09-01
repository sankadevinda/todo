<?php

use App\Http\Controllers\Homecontroll;
use App\Http\Controllers\Todocontroller;
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

// Route::get('/', function () {
//     return view('Layout.app');
// });


Route::get('/' , [Homecontroll::class , 'index'])->name('home');



Route::prefix('/todo')->group(function(){

Route::get('/' , [Todocontroller::class , 'index'])->name('todo');
Route::post('/store', [Todocontroller::class , 'store'])->name('todo.store');
Route::get('/{task_id}/delete' , [Todocontroller::class , 'delete'])->name('todo.delete');
Route::get('/{task_id}/done' , [Todocontroller::class , 'done'])->name('todo.done');
});



