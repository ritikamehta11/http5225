@extends('layout.app')

@section('title', 'Welcome')

@section('content')
<div class="container text-center">
    <h1 class="display-4">Welcome to My Laravel Application</h1>
    <p class="lead">This is a simple Laravel application for managing attractions and more!</p>
    <hr class="my-4">

    @guest
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Register</a>
        </p>
    @else
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Go to Dashboard</a>
        </p>
    @endguest


</div>
@endsection