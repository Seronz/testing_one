@extends('layouts.main')

@section('container')

<h1>Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $post)
        <div class="col-md-4">
            <div class="card text-bg-dark">
                <a href="/posts?category={{$post->slug}}">
                    <img src="https://source.unsplash.com/1200x500?{{$post->name}}" class="card-img" alt="{{$post->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill text-white fs-2" style="background-color: rgba(0,0,0,0.7)">
                    
                                {{$post->name}}
                
                            </h5>
                        </div>
                </a>
              </div>
        </div>
        @endforeach
    </div>
</div>







    
@endsection