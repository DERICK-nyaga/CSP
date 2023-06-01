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
<div class="comapny-container">
    <div class="company">
        <h2  class="text-center">Register Company</h2>
    </div>
    <form action="/companies" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="CompanyName" class="" placeholder="Only a registered by GoK company is allowed" value="">
        </div>
                <div class="form-group">
            <input type="text" name="address" class="" placeholder="Company phone number" value="">
        </div>
        <div class="form-group">
            <input type="number" name="location" class="" placeholder="Company's Location" value="">
        </div>
        <div class="form-group">
            <input type="number" name="pricing" class="" placeholder="Company's charges per kilogram" value="">
        </div>
        <div class="mb-3">
            <textarea name="description" placeholder="Company description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <textarea name="about" placeholder="Company where abouts" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
    </form>
</div>

@endsection
