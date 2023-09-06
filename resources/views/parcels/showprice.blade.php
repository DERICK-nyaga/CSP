@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="/parcel-cost" method="POST">
        @csrf
        <h2 class="text-center">You will pay{{ $data->amount }}</h2>
        {{-- <input type="hidden" name="price" value="{{ $data->price }}"> --}}
    <label for="inputCity" class="label-payment">Payment Method:</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="mpesa" checked>
      <label class="form-check-label" for="flexRadioDefault1">
        Lipa Na Mpesa
      </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="equity" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Equity Money
        </label>
      </div>

    <div class="col-12">
        <button type="submit" id="price-button" class="btn btn-primary">Submit</button>
      </div>

    </form>
</div>
@endsection
