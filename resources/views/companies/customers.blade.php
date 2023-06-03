@extends('layouts.app')

@section('title', 'Our Customers')

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
            @foreach ($navbars as $navbarItem)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($navbarItem->route) }}">
                    {{ $navbarItem->name }}</a>
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
        <th scope="col"> Email address</th>
        <th scope="col">Payment</th>
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
        <td>@mdo</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>5385909</td>
        <td>@fat</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Markcld</td>
        <td>643509231809</td>
        <td>@twitter</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Mark</td>
        <td>57387589</td>
        <td>@mdo</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Jacob</td>
        <td>5734895789</td>
        <td>@fat</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Larry the Bird</td>
        <td>753897598</td>
        <td>@twitter</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>Mark</td>
        <td>5737589789</td>
        <td>@mdo</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Jacob</td>
        <td>57378589</td>
        <td>@fat</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>Markcld</td>
        <td>563785837</td>
        <td>@twitter</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td>Mark</td>
        <td>563657876</td>
        <td>@mdo</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">11</th>
        <td>Jacob</td>
        <td>564365788</td>
        <td>@fat</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">12</th>
        <td>Larry the Bird</td>
        <td>654378678</td>
        <td>@twitter</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">13</th>
        <td>Mark</td>
        <td>990907</td>
        <td>@mdo</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">14</th>
        <td>Jacob</td>
        <td>5930985098</td>
        <td>@fat</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">15</th>
        <td>Markcld</td>
        <td>4820490</td>
        <td>@twitter</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">16</th>
        <td>Mark</td>
        <td>48920480</td>
        <td>@mdo</td>
        <td>Paid</td>
      </tr>
      <tr>
        <th scope="row">17</th>
        <td>Jacob</td>
        <td>43098409</td>
        <td>@fat</td>
        <td>Unpaid</td>
      </tr>
      <tr>
        <th scope="row">18</th>
        <td>Larry the Bird</td>
        <td>4839849</td>
        <td>@twitter</td>
        <td>Paid</td>
      </tr>
    </tbody>
  </table>

@endsection
{{-- {{ route('menuitem.store') }} --}}
