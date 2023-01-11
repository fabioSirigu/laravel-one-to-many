@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="title_home">Project portfolio</h1>
    </div>
    <div class="container py-2">
        <h4>Login for look all projects!</h4>
        <button class="btn btn-primary mb-3">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </button>
        <h6 class="mt-5">Powered by <img src="{{ Vite::asset('resources/img/logoNazOne.png')}}" alt="" class="logo_nazone"></h6>
    </div>
</div>
@endsection