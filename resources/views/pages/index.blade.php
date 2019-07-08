@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>


    <h1>Welcome to Laravel</h1>
    <p>This is the Laravel Application From the "Laravel From Scratch" Youtube series</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
    
@endsection
