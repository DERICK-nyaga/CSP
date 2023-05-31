@extends('layouts.app')

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

<div class="items">
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">G4S</h5>
                <p class="card-text">This is the leading company in the world...</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#" id="visitme"class="btn btn-warning">Visit Me</a>
                {{-- read me link to take me to description of all services offered by the company --}}
                {{-- visit me link to take me to a page to request parcel services  --}}
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Fargo Courier</h5>
                <p class="card-text">We deliver and operate worldwide best seller.</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Posta Kenya</h5>
                <p class="card-text">We operate under the postal services Kenya and deliver everywhere.</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">DHL</h5>
                <p class="card-text">We are an European company that operates on all grounds.</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#"id="visitme" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Americano Couriers</h5>
                <p class="card-text">We do even the unimaginable delivering at your footstep.</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">BM</h5>
                <p class="card-text">We are the most prestigious and trusted courier company...</p>
                <a href="#" id="readme" class="btn btn-info">Read Me</a>
                <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection



