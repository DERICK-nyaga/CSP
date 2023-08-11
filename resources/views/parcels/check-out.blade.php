 @extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="/checkout" method="POST">
    @csrf
        {{-- <input name="user_id" type="hidden" class="form-control" placeholder="This will set user_id" value="{{ auth()->user()->id }}"> --}}
        <label for="inputEmail4" class="form-label">Sender name:{{ $data->sender }}</label>
        <input type="hidden" name="sender" value="{{ $data->sender }}">
        <label for="inputPassword4" class="form-label">Mobile number:{{ $data->SenderContact }}</label>
        <input type="hidden" name="SenderContact" value="{{ $data->SenderContact }}">
        <label for="inputAddress" class="form-label">Receipient Name:{{ $data->receipient }}</label>
        <input type="hidden" name="receipient" value="{{ $data->receipient }}">
        <label for="inputAddress2" class="form-label">Recipient contact:{{ $data->ReceipientContact }}</label>
        <input type="hidden" name="ReceipientContact" value="{{ $data->ReceipientContact }}">
        <label for="inputCity" class="form-label">Your town:{{ $data->town }}</label>
        <input type="hidden" name="town" value="{{ $data->town }}">
        <label for="inputCity" class="form-label">Pickup Location:{{ $data->PickupStation }}</label>
        <input type="hidden" name="PickupStation" value="{{ $data->PickupStation }}">
        <label for="inputCity" class="form-label">Delivery Address:{{ $data->DeliveryAddress }}</label>
        <input type="hidden" name="DeliveryAddress" value="{{ $data->DeliveryAddress }}">
        <label for="town" class="form-label">Town Near You:{{ $data->branch }}</label>
        <input type="hidden" name="branch" value="{{ $data->branch }}">
        <label for="weight" class="form-label">Parcel Weight:{{ $data->weight }}</label>
        <input type="hidden" name="weight" value="{{ $data->weight }}">
        <h2 class="text-center">You will pay{{ $data->price }}</h2>
        <input type="hidden" name="price" value="{{ $data->price }}">
        <label for="payment" class="form-label">Payment-type:{{ $data->payment }}</label>
        <input type="hidden" name="payment" value="{{ $data->payment }}">

    <div class="col-12">
        <button type="submit" id="price-button" class="btn btn-primary">Submit</button>
      </div>

    </form>
</div>
@endsection
