@extends('layouts.app')

@section('main-navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DNLC&#8482;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inhouse Parcels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Parcel Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Movable Units</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Company Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


@endsection
