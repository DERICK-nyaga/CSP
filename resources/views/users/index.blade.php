@extends('layouts.app')

@section('title', 'Homepage')
@section('content')
    @include('layouts.customernavbar')
<table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Company Name</th>
        <th scope="col"> Email address</th>
        <th scope="col">Check Company</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($companies as $company )
        <tr>
        <th scope="row">{{ $company->id }}</th>
        <td>{{ $company->CompanyName }}</td>
        <td>{{ $company->address }}</td>
        <td><a href="{{ route('singlecompany', $company->id) }}">visit me&rarr;</a></td>
    </tr>
        @endforeach
     
    </tbody>
  </table>

@endsection

