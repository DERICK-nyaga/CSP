 @extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="/checkout" method="POST">
    @csrf
        {{-- <input name="user_id" type="hidden" class="form-control" placeholder="This will set user_id" value="{{ auth()->user()->id }}"> --}}
        <div class="row">
            <label for="inputEmail4" class="form-label">Sender name:{{ $data->sender }}</label>
            <input type="hidden" name="sender" value="{{ $data->sender }}">
        </div>
        <div class="row">
            <label for="inputPassword4" class="form-label">Mobile number:{{ $data->phoneNumber }}</label>
            <input type="hidden" name="phoneNumber" value="{{ $data->phoneNumber }}">
        </div>
        <div class="row">
            <label for="inputAddress" class="form-label">Receipient Name:{{ $data->receipient }}</label>
            <input type="hidden" name="receipient" value="{{ $data->receipient }}">
        </div>
        <div class="row">
            <label for="inputAddress2" class="form-label">Recipient contact:{{ $data->ReceipientContact }}</label>
            <input type="hidden" name="ReceipientContact" value="{{ $data->ReceipientContact }}">
        </div>
        <div class="row">
            <label for="inputCity" class="form-label">Your town:{{ $data->town }}</label>
            <input type="hidden" name="town" value="{{ $data->town }}">
        </div>
        <div class="row">
            <label for="inputCity" class="form-label">Pickup Location:{{ $data->PickupStation }}</label>
            <input type="hidden" name="PickupStation" value="{{ $data->PickupStation }}">
        </div>
        <div class="row">
            <label for="inputCity" class="form-label">Delivery Address:{{ $data->DeliveryAddress }}</label>
            <input type="hidden" name="DeliveryAddress" value="{{ $data->DeliveryAddress }}">
        </div>
        <div class="row">
            <label for="town" class="form-label">Town Near You:{{ $data->branch }}</label>
            <input type="hidden" name="branch" value="{{ $data->branch }}">
        </div>
        <div class="row">
            <label for="weight" class="form-label">Parcel Weight:{{ $data->weight }}</label>
            <input type="hidden" name="weight" value="{{ $data->weight }}">
        </div>
        <div class="row">
            <h2 class="text-center">Your Paid {{ $data->amount }} to DNGC</h2>
            <input type="hidden" name="amount" value="{{ $data->amount }}">
        </div>
        <div class="row">
            <label for="payment" class="form-label">Payment-type:{{ $data->payment }}</label>
            <input type="hidden" name="payment" value="{{ $data->payment }}">
        </div>

    <div class="col-12">
        <button type="submit" id="price-button" class="btn btn-primary">Submit</button>
      </div>

    </form>
</div>
@endsection
