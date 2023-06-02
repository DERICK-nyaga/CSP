@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')

'tracking_number',
'category',
'payment',
'price',
@auth
<div class="online-booking">
    <div>
        <h1 class="text-center">Parcel Payment form</h1>
    </div>
<form action="/parcels" method="POST" class="row g-3">
  <div class="col-md-6">
    <input name="price" type="text" class="form-control" placeholder="" value="{{ $price }}">
  </div>
  <div class="col-md-6">
    <input type="hidden" name="category" class="form-control " id="inputPassword4" placeholder="Parcel category">
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="paynow" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      Pay Now
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="ondelivery" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Pay-on-delivery
    </label>
  </div>
    <button type="submit" id="button" class="btn btn-primary">Checkout</button>
  </div>
</form>
</div>
@endauth

@guest
    {{ route('/') }}
@endguest


@endsection
