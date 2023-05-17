@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Sender name</label>
    <input name="sender" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile number</label>
    <input type="text" name="contact" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Receipient Name</label>
    <input type="text" name="receipient" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Recipient contact</label>
    <input type="text" name="receipient" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Your town</label>
    <input type="text" name="town" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Parcel Weight</label>
    <input type="text" name="weight" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Pickup Location</label>
    <input type="text" name="PickupStation" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Delivery Address</label>
    <input type="text" name="DeliveryAddress" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Additonal information</label>
    <input type="text" name="info" class="form-control" id="inputCity">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Send Request</button>
  </div>
</form>


@endsection

