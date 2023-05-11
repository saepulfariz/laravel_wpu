<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Saepulfariz',
        'email' => 'saepulhidayat302@gmail.com',
        'img' => 'epul.png',
    ]);
});



Route::get('/posts', [PostController::class, 'Index']);


Route::get('/posts/{slug}', [PostController::class, 'Show']);


Route::get('/welcome', function () {
    return view('welcome');
});
