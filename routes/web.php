<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});


// cara 1 pada laravel 8
// Route::get('posts', [PostController::class, 'index']);
// Route::get('posts/{id}', [PostController::class, 'show']);

// cara 2 pada laravel 9 yang menggantikan syntax (laravel 8) diatas.
// Route::resource('posts', PostController::class);


// gunanya untuk membuat group route tanpa menggunakan resource route
// sama seperti laravel 8 tapi tidak menggunakan [PostController::class, ]
Route::controller(PostController::class)->group(function(){

    Route::get('posts', 'index');
    Route::get('posts/{id}', 'show');

});