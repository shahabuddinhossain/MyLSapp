@extends('layouts.app')

@section('content') 
    <h1>Posts</h1> 
    <div>
        @if ( count($posts) > 0)
        @foreach ($posts as $post) 
        <div class="well">
            <h3> {{$post->title}} </h3>
            <small>Written on: {{$post->created_at}}</small>
            <p></p>
        </div>
        @endforeach
        @else
            <div class="text-danger"> No Post Found</div>        
        @endif
    </div>
    
  
@endsection