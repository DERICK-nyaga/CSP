@extends('layouts.app')

@section('title', 'My Parcels')
@section('content')
@include('layouts.customernavbar')

<div class="my-parcel">
    <div class="p-head">
        <h2>You have 4 parcels to pick</h2>
    </div>
    @foreach ($myparcels as $key => $parcel)
            <p>Parcel_{{ $parcel->parcel_id }}: is ready for pickup at Carta {{ $parcel->user_id }} pickup station. tracking number is 67685.pickup station is {{ $parcel->PickupStation }}</p>
    @endforeach
</div>

@endsection
