@extends('layouts.app')

@section('title', 'Dropoff_request')

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
        <th scope="col">Order</th>
        <th scope="col">Parcel Owner</th>
        <th scope="col">Mobile number</th>
        <th scope="col">Pickup Location</th>
        <th scope="col">Destination</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        {{-- @foreach ($customers as $customer )
        <th scope="row">{{ $customer->id }}</th>
            <td>{{ $customer->lname }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>{{ $customer->email }}</td>
        @endforeach --}}
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>358568939</td>
        <td>Embu town shell petrol station</td>
        <td>Kerugoya meghiji bd 1st floor,rm20</td>
        <td class="dropoffs">
            <button id="success" type="button" class="btn btn-success">Confirm</button>
            <button id="deny" type="button" class="btn btn-danger">Deny</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>5385909</td>
        <td>Meru Burj Hassad 3rd floor</td>
        <td>Chuka Generations</td>
        <td class="dropoffs">
            <button id="success" type="button" class="btn btn-success">Confirm</button>
            <button id="deny" type="button" class="btn btn-danger">Deny</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Markcld</td>
        <td>643509231809</td>
        <td>Muthokinju paints mwea</td>
        <td>Baghad bd 3nd floor rm390</td>
        <td class="dropoffs">
            <button id="success" type="button" class="btn btn-success">Confirm</button>
            <button id="deny" type="button" class="btn btn-danger">Deny</button>
        </td>
      </tr>
    </tbody>
  </table>

{{-- on button action submit a form to tell user time package is likely to be picked up or why you won't pickup the package --}}
@endsection
