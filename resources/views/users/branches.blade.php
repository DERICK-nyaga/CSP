{{-- display a single branch here --}}
@extends('partials.app')
@section('content')

{{-- <table class="table table-hover table-responsive table-bordered">
<thead>
    <tr>
        <th scope="col">Branch Index</th>
        <th scope="col">Branch name</th>
    </tr>
</thead>
<tbody>
    <tr>
        @foreach ($branches as $branch )
            <th scope="row">{{ $branch->id }}</th>
            <td><a href="#routename">{{ $branch->branchname }}</a></td>
        @endforeach
    </tr>
</tbody>
</table> --}}

<table class="table table-hover table-responsive table-bordered">
    <thead>
      <tr>
        <th scope="col">List</th>
        <th scope="col">Branch name</th>
        <th scope="col">Town</th>
        <th scope="col">Check Branch</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Kakamega</td>
        <td>Kakamega</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Kisumu</td>
        <td>Kondele</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Bungoma</td>
        <td>Webuye</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Nairobi</td>
        <td>Buruburu</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Kiambu</td>
        <td>Ruiru</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Meru</td>
        <td>Makutano</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>Laikipia</td>
        <td>Nanyuki</td>
        <td><a href="#">visit me&rarr;</a></td>
      </tr>
    </tbody>
  </table>
@endsection
