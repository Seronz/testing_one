<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    

    // untuk menghubungkan category dengan post
    // untuk dokumentasi lebih lengkap dapat dilihat di Post.php
    public function post(){
        return $this->hasMany(Post::class);
    }
}
