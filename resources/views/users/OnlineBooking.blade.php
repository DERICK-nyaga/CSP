@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
<div class="online-booking">
    <div>
        <h1 class="text-center">Send Parcel form</h1>
    </div>
<form action="/parcels" method="POST" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Sender name</label>
    <input name="sender" type="text" class="form-control" placeholder="Your own real name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile number</label>
    <input type="text" name="SenderContact" class="form-control " id="inputPassword4" placeholder="Your current mobile number">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Receipient Name</label>
    <input type="text" name="receipient" class="form-control" id="inputAddress" placeholder="The name of person to receive the parcel">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Recipient contact</label>
    <input type="text" name="ReceipientContact" class="form-control" id="inputAddress2" placeholder="The contact details of person receiving parcel">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Your town</label>
    <input type="text" name="town" class="form-control" placeholder="The town you currently reside in">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Parcel Weight</label>
    <input type="text" name="weight" class="form-control" placeholder="The weight of the parcel in kilograms">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Pickup Location</label>
    <input type="text" name="PickupStation" class="form-control" placeholder="The desired pickup location or town">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Delivery Address</label>
    <input type="text" name="DeliveryAddress" class="form-control" placeholder="The delivery address of the parcel">
  </div>
  <div class="col-md-8">
    <label for="inputCity" class="form-label">Additonal information</label>
    <input type="text" name="info" class="form-control move" placeholder="Additional information about package">
  </div>
  <div class="col-12">
    <button type="submit" id="button" class="btn btn-primary">Send Request</button>
  </div>
</form>
</div>

@endsection

