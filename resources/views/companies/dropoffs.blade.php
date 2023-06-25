@extends('layouts.app')

@section('title', 'Dropoff_request')

@section('content')
    @include('layouts.comnavbar')
    
        <table class="table table-hover table-responsive table-bordered">
            <thead>
            <tr>
                <th scope="col">Order</th>
                <th scope="col">Parcel Owner</th>
                <th scope="col">Mobile number</th>
                <th scope="col">Pickup Location</th>
                <th scope="col">Destination</th>
                <th scope="col">Action</th>
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
                <td>Mark</td>
                <td>358568939</td>
                <td>Embu town shell petrol station</td>
                <td>Kerugoya meghiji bd 1st floor,rm20</td>
                <td class="dropoffs">
                    <button id="success" type="button" class="btn btn-success">Confirm</button>
                    <button id="deny" type="button" class="btn btn-danger">Deny</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>5385909</td>
                <td>Meru Burj Hassad 3rd floor</td>
                <td>Chuka Generations</td>
                <td class="dropoffs">
                    <button id="success" type="button" class="btn btn-success">Confirm</button>
                    <button id="deny" type="button" class="btn btn-danger">Deny</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Markcld</td>
                <td>643509231809</td>
                <td>Muthokinju paints mwea</td>
                <td>Baghad bd 3nd floor rm390</td>
                <td class="dropoffs">
                    <button id="success" type="button" class="btn btn-success">Confirm</button>
                    <button id="deny" type="button" class="btn btn-danger">Deny</button>
                </td>
            </tr>
            </tbody>
        </table>

{{-- on button action submit a form to tell user time package is likely to be picked up or why you won't pickup the package --}}
@endsection
