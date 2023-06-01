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
  
  <table class="table table-hover table-responsive table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Parcel Sender</th>
        <th scope="col">Location</th>
        <th scope="col">Contact</th>
        <th scope="col">Destination</th>
        <th scope="col">Request Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
        <td>07979999</td>
        <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
        <td>21.5.2023:11:45:20am</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
        <td>07979999</td>
        <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
        <td>21.5.2023:11:45:20am</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Thornton</td>
        <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
        <td>07979999</td>
        <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
        <td>21.5.2023:11:45:20am</td>
      </tr>
    </tbody>
  </table>
@endsection