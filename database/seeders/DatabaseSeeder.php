<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Saepulfariz',
            'email' => 'Saepulfariz108@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'zail',
            'email' => 'zail@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);


        Post::create([
            'title' => 'Judul Ke Satu',
            'user_id' => 1,
            'category_id' => 1,
            'slug' => 'Judul-Ke-Satu',
            'excerpt' => 'Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum ',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corporis dolorem, nobis odio a porro animi fuga atque repellat veritatis excepturi sit illo voluptatem blanditiis, iure facilis ullam dolor sint eius, consequuntur asperiores omnis numquam incidunt laudantium? Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum perspiciatis ex deserunt eum facilis eligendi culpa adipisci autem.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p> <p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'Judul-Ke-Dua',
            'excerpt' => 'Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum ',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corporis dolorem, nobis odio a porro animi fuga atque repellat veritatis excepturi sit illo voluptatem blanditiis, iure facilis ullam dolor sint eius, consequuntur asperiores omnis numquam incidunt laudantium? Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum perspiciatis ex deserunt eum facilis eligendi culpa adipisci autem.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p> <p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p>'
        ]);
        Post::create([
            'title' => 'Judul Ke Tiga',
            'user_id' => 1,
            'category_id' => 2,
            'slug' => 'Judul-Ke-Tiga',
            'excerpt' => 'Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum ',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corporis dolorem, nobis odio a porro animi fuga atque repellat veritatis excepturi sit illo voluptatem blanditiis, iure facilis ullam dolor sint eius, consequuntur asperiores omnis numquam incidunt laudantium? Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum perspiciatis ex deserunt eum facilis eligendi culpa adipisci autem.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p> <p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p>'
        ]);
        Post::create([
            'title' => 'Judul Ke Empat',
            'user_id' => 2,
            'category_id' => 3,
            'slug' => 'Judul-Ke-Empat',
            'excerpt' => 'Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum ',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corporis dolorem, nobis odio a porro animi fuga atque repellat veritatis excepturi sit illo voluptatem blanditiis, iure facilis ullam dolor sint eius, consequuntur asperiores omnis numquam incidunt laudantium? Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum perspiciatis ex deserunt eum facilis eligendi culpa adipisci autem.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p> <p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p>'
        ]);
    }
}
