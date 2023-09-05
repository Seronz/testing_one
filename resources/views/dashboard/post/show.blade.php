@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
       
            <h1>{{$post->title}}</h1>
    </div>
    <div class="my-3">
            <a href="/dashboard/posts" class="btn btn-success">Back</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning">Edit</a>
     
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Delete Post')">
                  Delete
                </button>
              </form>
    </div>
            @if ($post->image)
            <img src="{{asset('storage/'.$post->image)}}" class="img-fluid"/>
           
            @else
            <img src="https://source.unsplash.com/1200x500?{{$post->category->name}}" class="img-fluid"/>                
            @endif

        

        <p>{!!$post->body !!}</p>
        
    </div>
</div>
@endsection