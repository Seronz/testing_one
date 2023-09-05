<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  
    public function index(){

        $title ='';
        if(request('category')){
            $category = \App\Models\Category::firstWhere('slug', request('category'));
            $title=" in $category->name" ;
        }


        if(request('author')){
            $author = \App\Models\User::firstWhere('username', request('author'));
            $title=" by $author->name";
        }

        return view('blog',[
            'title'=>'All Post'. $title,
            'active'=>'post',
            // 'post'=> Post::all(),
            // lates()->get digunakan untuk mensorting agar data yang ditampilkan adalah yang terakhir dibuat 
            // filter() didapat dari file post yang digunakan untuk pencarian 
            'posts'=>Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
            //  with dipindahkan di Post
            // with()digunakan untuk menghindari problem n+1
            // seperti kode di atas itu akan mengkasilkan problem n+!
            // 'post'=>Post::with(['author','category'])->latest()->get(),
        ]);
    }

    public function show(Post $post){
        return view('blogs',[
            'title'=>'SINGLE POST',
            'active'=>'post',
            'post'=> $post
        ]);
    }
}
