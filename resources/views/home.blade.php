@extends('layouts.base')

@section('content')
<div class="col-md-8 articles" id="site-content">
    <div class="card-body">
        @auth
        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
    </div>

    <article class="posts">
        <h1>Home</h1>
        <h2 class="title-post">Lorem ipsum </h2>
        <div class="content">
            <img src="data:image/jpeg;base64,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">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed 
                laoreet sapien eu velit elementum, at facilisis urna facilisis. 
                ellentesque quis erat vulputate, dignissim lorem eu, facilisis 
                enim. Ut cursus tristique quam
            </p>
        </div>
    </article>
</div>
@endsection

