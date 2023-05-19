<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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


// Route::get('/posts/{slug}', [PostController::class, 'Show']);
// kirim post sesuai dengan nama model nya
// kalau tulis post ajah maka akan cari uniq id 
// Route::get('/posts/{post}', [PostController::class, 'Show']);
Route::get('/posts/{post:slug}', [PostController::class, 'Show']);

// route model binding
// clouser dulu tanpa controller
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",

        // ini kebalikan yang tadi 
        'posts' => $category->posts->load('category', 'author'),
    ]);
});


Route::get('/categories', function (Category $category) {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'Pots By Author : ' . $author->name,
        // lazy eager loading
        'posts' => $author->post->load('category', 'author'),
    ]);
});


Route::get('/welcome', function () {
    return view('welcome');
});
