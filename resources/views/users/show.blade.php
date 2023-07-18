@extends('layouts.app')

@section('title', 'CompanyView')
@section('content')
    @include('layouts.customernavbar')
{{-- display a single company's branch here --}}
{{-- <div class="company"> --}}
    <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Branch Name</th>
            <th scope="col">Visit Branch</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
        <tr>
            @foreach($branches as $branch)
            <th scope="row">{{ $branch->id }}</th>
            <td><a href="{{ $branch->id }}">{{ $branch->branchname }}</a></td>
            <td><a href="{{ route('singlecompany', $branch->id) }}">visit me&rarr;</a></td>
        </tr>
            @endforeach

        </tbody>
      </table>

{{-- </div> --}}

@endsection
