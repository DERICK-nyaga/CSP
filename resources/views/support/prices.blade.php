@extends('layouts.app')

@section('title', 'Prices')
@section('content')
    @include('layouts.customernavbar')

    <div class="prices">
        <div class="price-card">
            <div class="card-head">
                <h1 class="text-center">Standard parcels</h1>
            </div>
            <h2 class="left">Price of <span>Parcels between 0-10kg</span></h2>
            <div class="price">
                <h3 class="text-center">Ksh.330</h3>
                <p>The prices have been standardised internally</p>
            </div>
        </div>
        <div class="price-card">
            <div class="card-head">
                <h1 class="text-center">Sub-standard parcels</h1>
            </div>
            <h2 class="left">Price of <span>Parcels between 10-25kg</span></h2>
            <div class="price">
                <h3 class="text-center">Ksh.650</h3>
                <p>The prices have been standardised internally</p>
            </div>
        </div>
        <div class="price-card">
            <div class="card-head">
                <h1 class="text-center">Heavy parcels</h1>
            </div>
            <h2 class="left">Price of <span>Parcels between 25-100kg</span></h2>
            <div class="price">
                <h3 class="text-center">Ksh.1330</h3>
                <p>The prices have been standardised internally</p>
            </div>
        </div>
        <div class="price-card">
            <div class="card-head">
                <h1 class="text-center">Bulk parcels</h1>
            </div>
            <h2 class="left">Price of <span>Parcels above 100kg but less than 1000kg</span></h2>
            <div class="price">
                <h3 class="text-center">Ksh.12500</h3>
                <p>The prices have been standardised internally</p>
            </div>
        </div>
    </div>

@endsection
