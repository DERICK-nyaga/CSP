@extends('partials.app')

@section('title', 'Notifications')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DNLC&#8482;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @foreach ($navbars as $navbarItem)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
            </li>
        @endforeach
        </ul>
      </div>
    </div>
  </nav>

<div class="all">
<div class="sidebar">
    <nav>
        <ul>
            <li class="two"><a href="#">Home</a></li>
            <li class="two"><a href="#">Contact Us</a></li>
            <li class="two"><a href="#">Send message</a></li>
            <li class="two"><a href="#">Check Delivery</a></li>
            <li class="two"><a href="#">Cancel Pickup</a></li>
        </ul>
    </nav>
</div>
<div class="notifications">
    <div class="inner">
        <h1 class="notif">hello</h1><hr>
        <h1 class="notif">hello</h1><hr>
        <h1 class="notif">hello</h1><hr>
        <h1 class="notif">hello</h1><hr>
        <h1 class="notif">hello Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, aliquam voluptatibus reprehenderit quasi ex laboriosam sunt officia omnis reiciendis ducimus dignissimos sapiente eos facere quam magnam doloribus fugit. Quis, nostrum!</h1><hr>
        <h1 class="notif">hello there.. the world is all ours</h1><hr>
    </div>
</div>
</div>
@endsection
