@extends('layouts.app')

@section('title', 'List of Companies')
@section('content')
  @include('partials.customernavbar')

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

            @foreach ($companies as $company )
        <tr>
            <th scope="row">{{ $company->id }}</th>
            <td>{{ $company->ompanyName }}</td>
            <td>{{ $company->address }}</td>
            <td><a href="{{ route('singlecompany', $company->id) }}">visit me&rarr;</a></td>
        </tr>
            @endforeach

      {{-- <tr>
        <th scope="row">1</th>
        <td>Merkel Couriers</td>
        <td>+358568939</td>
        <td>mdohdjs@gmail.com</td>
        <td><a href="{{ route('allbranches') }}">visit me&rarr;</a></td>
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
      </tr> --}}
    </tbody>
  </table>

@endsection
