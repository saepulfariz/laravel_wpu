<?php

namespace App\Models;


class Post
{
    // properties statis bisa di akses di class ini ajah 
    private static $blog_posts = [
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

    // method static 
    public static function all()
    {
        // kalau properti static pake self::properti

        // collection pembungkus array biar jadi sakti
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        // static::method buat panggil methode static
        $posts = static::all();

        // jika slug parameter sama dengan slug di array maka kirimkan
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;

        // ambil 1 data dengan where slug
        return $posts->firstWhere('slug', $slug);
    }
}
