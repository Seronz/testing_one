<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // digunakan agar tinker dapat di isi dengan cara ::create
    protected $guarded = ['id'];
    // kode dibawah digunakan untuk query data agar tidak terjadi problem n+1
    // lengkapnya ada di postControler
    protected $with = ['category','author'];


    // untuk menghubungkan model post ini dengan model category
    // nama method harus sama dengan nama modelnya

    public function scopeFilter($query, array $filters){

        // when() adalah method bawaan laravel 
        // when() method ini akan dijalankan jika argumen pertama bernilai true

        // if(isset($filters['search'])?$filters['search']:false){
        //     return $query->where('title', 'like', '%'.$filters['search'].'%')
        //     ->orWhere('body', 'like', '%'. $filters['search']. '%');
        // }

        // kode dibawah ini sebenarnya fungsinya sama
        // hanya saja menggunakan method when

        $query->when($filters['search'] ?? false,function($query, $search){
            return $query->where(function($query)use($search){
                $query->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%');
            });
        } );

        $query->when($filters['category'] ?? false, function($query, $category){
        // whereHas adalah method laravel untuk relationship
        // di sql seperti join table
        // jadi kode dibawah bisa dibaca query memilii relationship category
        // keyword use ini digunakan agar parameter $category dapat membaca $category di parameter induk function
            return $query->whereHas('category', function($query) use ($category){
                $query-> where('slug', $category);
            });
        });

        $query->when($filters['author']?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username', $author);
            });
        });
            
          
        
    }

    public function category(){

        // $this mengembalikan model post ini/diri sendiri
        // $this->maunya apa misal di kode ini 1 postingan ingin punya 1 kartegori
        // belongsTo itu dinamakan relasi
        return $this->belongsTo(Category::class);
    }

    public function author(){
        // user_id dipanggil sebagai alias pada fungsi
        // seperti user_id as author
        return $this->belongsTo(User::class, 'user_id');
    }


    // fungsi agar route langsung mencari slug bukan id
    public function getRouteKeyName(){
        return 'slug';
    }

   
};
