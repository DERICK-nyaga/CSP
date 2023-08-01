@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DNLC&#8482;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            @endguest
        </ul>
      </div>
    </div>
</nav>

@endsection
