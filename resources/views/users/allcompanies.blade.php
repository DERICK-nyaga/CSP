@extends('layouts.app')

@section('title', 'List of Companies')
@section('content')
@include('layouts.companylist')
{{-- list the companies based on the order of standard price  --}}
<table class="table table-hover table-responsive table-bordered">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Company Name</th>
        <th scope="col">Mobile number</th>
        <th scope="col"> Email address</th>
        <th scope="col">Check Company</th>
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
        <td>Merkel Couriers</td>
        <td>+358568939</td>
        <td>mdohdjs@gmail.com</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacabees Fargo</td>
        <td>+5385909</td>
        <td>jagabees@gmail.com</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Markcld Wells Int</td>
        <td>+643509231809</td>
        <td>twitter@gmail.com</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Mrcloss Courier Int</td>
        <td>+57387589</td>
        <td>almdo@gmail.com</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
    </tbody>
  </table>

@endsection