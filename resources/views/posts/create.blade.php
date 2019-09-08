@extends('layouts.app')

@section('content') 

    <h1>Create Post</h1> 
    <div>
        <form mathod="post" action="PostsController@store">
            @csrf                
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="postHelp" placeholder="Title of the post">
            </div>
            <div class="form-group">
                <label for="body">Post Details</label>
                <input type="text" class="form-control" id="body" name="body" placeholder="Post Details">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection