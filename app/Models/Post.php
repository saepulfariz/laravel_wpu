<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // kalau gak di isi maka akan ambil otomatis dari default nya
    // timestamps
    // protected $fillable = ['title', 'excerpt', 'body'];

    // apa yang di isi biar gak nambain mulu ke fillable
    protected $guarded = ['id'];
    // tipe mess asgement ketika update
    // bisa berubah karena gak fillable nya selain id

    // $post::create([
    //     'title' => 'Judul Ke Empat',
    //     'excerpt' => 'Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum ',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corporis dolorem, nobis odio a porro animi fuga atque repellat veritatis excepturi sit illo voluptatem blanditiis, iure facilis ullam dolor sint eius, consequuntur asperiores omnis numquam incidunt laudantium? Quisquam pariatur numquam, vel rerum, totam incidunt minima hic iusto ut harum perspiciatis ex deserunt eum facilis eligendi culpa adipisci autem.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p><p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p> <p>Dicta sit quia ratione minus quo voluptatem aspernatur dignissimos, accusamus saepe maiores itaque amet ex mollitia voluptas doloribus debitis quibusdam officia cumque! Perspiciatis, nulla laborum! Dignissimos error, recusandae, sapiente id dolorum perferendis soluta in maiores, corporis laudantium nihil repudiandae? Nisi, voluptas quo.</p>'
    // ])

    // where id = 3
    // Post::find(3)->update([
    //     'title' => 'Judul Ke Tiga Berubah'
    // ])

    // ubah berdasarkan where title akan mengembalika berapa baris yang kerubah
    // $post->where('title', 'Judul Ke Tiga Berubah')->update([
    //     'excerpt'=> 'excerpt berubah'
    // ])

    public function category()
    {
        // karena 1 post bisa 1 kategori
        return $this->belongsTo(Category::class);
    }
}
