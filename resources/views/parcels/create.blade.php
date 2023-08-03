@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')
<div class="online-booking">
    <div>
        <h1 class="text-center">User-input form</h1>
    </div>
<form action="/parcel" method="POST" class="row g-3">
    @csrf
    {{-- <input type="hidden" name="parcel_id" value="{{ $trackingnumber }}"> --}}
    {{-- on selecting the company you desire to use it should store that value in a variable and use it to diplay related branches --}}
        <input name="user_id" type="hidden" class="form-control" placeholder="This will set user_id" value="{{ auth()->user()->id }}">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Sender name:</label>
    <input name="sender" type="text" class="form-control" placeholder="Your own real name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile number:</label>
    <input type="text" name="SenderContact" class="form-control " id="inputPassword4" placeholder="Your current mobile number">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Receipient Name:</label>
    <input type="text" name="receipient" class="form-control" id="inputAddress" placeholder="The name of person to receive the parcel">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Recipient contact:</label>
    <input type="text" name="ReceipientContact" class="form-control" id="inputAddress2" placeholder="The contact details of person receiving parcel">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Your town:</label>
    <input type="text" name="town" class="form-control" placeholder="The dropoff location">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Pickup Location:</label>
    <input type="text" name="PickupStation" class="form-control" placeholder="The desired pickup location or town share on google maps ">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Delivery Address:</label>
    <input type="text" name="DeliveryAddress" class="form-control" placeholder="The delivery address of the parcel">
  </div>

<div class="col-md-6">
    <label for="town" class="form-label">Select a Town Near You:</label>
    <select name="branch" class="form-select form-control" aria-label="Default select example">
        <option selected>Select your Current Town</option>
    @foreach($branches as $key => $branch)
        <option value="$branch->branchname">{{ $branch->branchname}}</option>
    @endforeach
      </select>
</div>

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
  {{-- output the branches attached to the current select company --}}

  <div class="col-12">
    <button type="submit" id="button" class="btn btn-primary">Next</button>
  </div>

</form>
</div>

@endsection

