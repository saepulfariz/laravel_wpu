<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Saepulfariz",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo asperiores maxime reiciendis cumque, deserunt, nemo aperiam itaque at nulla laborum doloremque consequuntur molestias expedita sequi ipsum recusandae sed! Qui atque ea at, incidunt eos porro aut error quas esse ducimus iusto officia quod quibusdam expedita, nobis rem pariatur unde ullam autem. Natus iusto possimus voluptates mollitia nostrum, quae aliquam maxime ad dolores! Similique adipisci iusto excepturi nostrum, sequi recusandae in optio id cumque asperiores neque laborum minus eum eius perferendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zail",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, libero magnam? A quos magni pariatur omnis nobis, accusamus rem fugiat vel, perferendis vitae eum similique aut debitis sint facilis quia minima nam, laboriosam illo officiis dicta! Nostrum iusto eius voluptate cum magni dicta quo cumque repudiandae totam. Sed iure doloremque quisquam obcaecati deleniti nihil repellat iste quam enim reiciendis nisi tenetur ipsum quae consequuntur dolorum labore sunt placeat harum dicta, aut quaerat veritatis incidunt ratione magnam? Praesentium aspernatur aperiam repellendus nam ipsum minima voluptas inventore commodi expedita assumenda! Explicabo saepe dolorum ratione ipsa voluptatem quas rem perspiciatis assumenda provident obcaecati."
        ]
    ];

    return view('posts', [
        'title' => 'Posts',
        "posts" => $blog_posts
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Saepulfariz",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo asperiores maxime reiciendis cumque, deserunt, nemo aperiam itaque at nulla laborum doloremque consequuntur molestias expedita sequi ipsum recusandae sed! Qui atque ea at, incidunt eos porro aut error quas esse ducimus iusto officia quod quibusdam expedita, nobis rem pariatur unde ullam autem. Natus iusto possimus voluptates mollitia nostrum, quae aliquam maxime ad dolores! Similique adipisci iusto excepturi nostrum, sequi recusandae in optio id cumque asperiores neque laborum minus eum eius perferendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zail",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, libero magnam? A quos magni pariatur omnis nobis, accusamus rem fugiat vel, perferendis vitae eum similique aut debitis sint facilis quia minima nam, laboriosam illo officiis dicta! Nostrum iusto eius voluptate cum magni dicta quo cumque repudiandae totam. Sed iure doloremque quisquam obcaecati deleniti nihil repellat iste quam enim reiciendis nisi tenetur ipsum quae consequuntur dolorum labore sunt placeat harum dicta, aut quaerat veritatis incidunt ratione magnam? Praesentium aspernatur aperiam repellendus nam ipsum minima voluptas inventore commodi expedita assumenda! Explicabo saepe dolorum ratione ipsa voluptatem quas rem perspiciatis assumenda provident obcaecati."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});


Route::get('/welcome', function () {
    return view('welcome');
});
