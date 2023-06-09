@extends('layouts.admin')

@section('content')

    <div class="dashboard">
        <div class="board">
                {{-- display all the dropoffs here --}}
            <h2>pickup requests</h2> {{  }}
        </div>

        <div class="board">
            {{-- display total packages that need pickup --}}
            <h2>parcels for pickup</h2>
        </div>

        <div class="board">
            {{-- display total of all paid items --}}
            <h2>paid parcels</h2>
        </div>

        <div class="board">
            {{--  --}}
            <h2></h2>
        </div>

    </div>
@endsection
