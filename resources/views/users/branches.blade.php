@extends('partials.app')
@section('content')

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
        {{-- @if($branches->count())
            @foreach ($branches as $index => $branch)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $branch->branchName }}</td>
                <td>{{ $branch->town }}</td>
                <td><a href="{{ $branch->id }}">visit me&rarr;</a></td>
            </tr>
            @endforeach
        @endif --}}

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
