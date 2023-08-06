@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="{{ route('checkout') }}" method="POST">
        <h2>{{ $data->price }}</h2>
        <input type="hidden" name="price" value="{{ $data->price }}">
    <label for="inputCity" class="label-payment">Payment Method:</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="now" checked>
      <label class="form-check-label" for="flexRadioDefault1">
        Now
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2"  value="onDelivery">
      <label class="form-check-label" for="flexRadioDefault2">
        On Delivery
      </label>
    </div>

    <div class="col-12">
        <button type="submit" id="button" class="btn btn-primary">Submit</button>
      </div>
    
    </form>
</div>
@endsection
