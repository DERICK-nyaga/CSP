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
        <th scope="col">Parcel Owner</th>
        <th scope="col">Tracking number</th>
        <th scope="col">Contact address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>6474747</td>
        <td>07979999</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>9439849</td>
        <td>097944</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Thornton</td>
        <td>74374739</td>
        <td>9329392</td>
      </tr>
    </tbody>
  </table>

@endsection
{{-- {{ route('menuitem.store') }} --}}