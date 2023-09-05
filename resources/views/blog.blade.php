@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request(['category','author']))
      <input type="hidden" name="category" value="{{request('category')}}"/>
      <input type="hidden" name="author" value="{{request('author')}}"/>
      @endif


      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3">

            @if ($posts[0]->image)
            <img src="{{asset('storage/'.$posts[0]->image)}}" class="img-fluid"/>
           
            @else
            <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="...">

            @endif
    <div class="card-body text-center">
     <a href="/post/{{$posts[0]->slug}}" class="text-decoration-none text-dark">
        <h5 class="card-title">{{$posts[0]->title}}</h5>
    </a> 
      
      <p>
        <small class="text-muted">
        By:
        <a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none">
         {{$posts[0]->author->name}}
        </a> in
        <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none">
            {{$posts[0]->category->name}}
        </a> {{$posts[0]->created_at->diffForHumans()}}
    </small>
    </p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>
      <a href="/post/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>



<div class="container">
    <div class="row">
        {{-- skip() digunakan agar postingan pertama tidak ikut di looping --}}
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-5">
            <div class="card" style="width: 18rem;">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,.7)">
                    <a href="/posts?category={{$post->category->slug}}" class="text-white text-decoration-none">{{$post->category->name}}</a>
                </div>
                @if ($post->image)
            <img src="{{asset('storage/'.$post->image)}}" class="img-fluid"/>
           
            @else
            <img src="https://source.unsplash.com/1200x500?{{$post->category->name}}" class="img-fluid"/>                
            @endif
                <div class="card-body">
                  <h6 class="card-title">{{$post->title}}</h6>
                  <small class="text-muted">
                    By:
                    <a href="/author/{{$post->author->username}}" class="text-decoration-none">
                     {{$post->author->name}}
                    </a> {{$post->created_at->diffForHumans()}}
                </small>
                  <p class="card-text">{{$post->excerpt}}</p>
                  <a href="/post/{{$post->slug}}" class="btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p>no post found</p>
@endif

{{$posts->links()}}

@endsection