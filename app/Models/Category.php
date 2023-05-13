<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // jagain fill id
    protected $guarded = ['id'];

    public function posts()
    {
        // 1 kategori bisa banyak post
        return $this->hasMany(Post::class);
    }
}
