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
        <th scope="col">Mobile number</th>
        <th scope="col"> Email address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        @foreach ($customers as $customer )
            <td>{{ $customer->lname }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>{{ $customer->email }}</td>
        @endforeach
      </tr>
    </tbody>
  </table>

@endsection
{{-- {{ route('menuitem.store') }} --}}
