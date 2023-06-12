{{-- display a single branch here --}}
@extends('partials.app')
@section('content')
<table class="table table-hover table-responsive table-bordered">
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
</table>
@endsection
