@extends('layouts.app')

@section('client-navbar')

{{-- navbar for a client --}}
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
            <a class="nav-link" href="#">My Parcel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Track Parcel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Policies</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Companies
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">G4S</a></li>
              <li><a class="dropdown-item" href="#">BM</a></li>
              <li><a class="dropdown-item" href="#">Courier Int</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


@endsection


{{--

each company:
  has id

  has pricing
  has about page
  fragile, bulk and standard
  every parcel must have a category such as fragile, bulk, standard,
  this is chosen from my controller class for parcels where a parcel
  which is an elctronic or gascooker is termed as fragile and is under 10kilograms
  while above 10kgs extra charges are added on top, parcels not fragile and
   are above 10kg and equal to 50kg are said to be standard parcels then those
    above 50kg are said to be bulk and bulk charges are applied.
 --}}
