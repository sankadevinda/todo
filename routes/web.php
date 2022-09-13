<?php

use App\Http\Controllers\BannerController;
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
Route::get('/edit' , [Todocontroller::class , 'edit'])->name('todo.edit');
Route::post('/{task_id}/update' , [Todocontroller::class , 'update'])->name('todo.update');
Route::get('/{task_id}/delete' , [Todocontroller::class , 'delete'])->name('todo.delete');
Route::get('/{task_id}/done' , [Todocontroller::class , 'done'])->name('todo.done');


//subtask routes

Route::get('/{task_id}/sub' , [Todocontroller::class , 'subtask'])->name('todo.sub');
Route::get('/sub/store' , [Todocontroller::class , 'sub_store'])->name('todo.sub.store');

});

Route::prefix('/banner')->group(function(){

    Route::get('/' , [BannerController::class , 'index'])->name('banner');
    Route::post('/store', [BannerController::class , 'store'])->name('banner.store');
    Route::get('/{banner_id}/delete' , [BannerController::class , 'delete'])->name('banner.delete');
    Route::get('/{banner_id}/status' , [BannerController::class , 'status'])->name('banner.status');
    });



//jestream authentication

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
