@extends('layouts.app')
@section('content')
  @include('layouts.customernavbar')
  
<table class="table table-hover table-responsive table-bordered">
    <thead>
      <tr>
        <th scope="col">List</th>
        <th scope="col">Branch name</th>
        <th scope="col">Check Branch</th>
      </tr>
    </thead>
    <tbody>
        @if($branches->count())
            @foreach ($branches as  $branch)
            <tr>
                <th scope="row">{{ $branch->id }}</th>
                <td>{{ $branch->branchname }}</td>
                <td><a href="{{ $branch->id }}">visit me&rarr;</a></td>
            </tr>
            @endforeach
        @endif
    </tbody>
  </table>
@endsection
