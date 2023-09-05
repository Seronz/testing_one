

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <img class="col-md-8">

            <h1>{{$post->title}}</h1>

            <p class="mt-3 mb-3">
                By: 
            <a href="/author/{{$post->author->username}}">
                {{$post->author->name}}
            </a> 
                || 
            <a href="/posts?category={{$post->category->slug}}">
                {{$post->category->name}}
            </a>
        </p>

        @if ($post->image)
        <img src="{{asset('storage/'.$post->image)}}" class="img-fluid"/>
       
        @else
        <img src="https://source.unsplash.com/1200x500?{{$post->category->name}}" class="img-fluid"/>                
        @endif
        

        <p>{!!$post->body !!}</p>

        <a href="/posts">kembali</a>

        </div>
    </div>
</div>





 

 

@endsection

