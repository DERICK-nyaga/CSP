 @extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="/checkout" method="POST">
    @csrf
        {{-- <input name="user_id" type="hidden" class="form-control" placeholder="This will set user_id" value="{{ auth()->user()->id }}"> --}}
        <label for="inputEmail4" class="form-label">Sender name:{{ $data->sender }}</label>
        <label for="inputPassword4" class="form-label">Mobile number:{{ $data->SenderContact }}</label>
        <label for="inputAddress" class="form-label">Receipient Name:{{ $data->receipient }}</label>
        <label for="inputAddress2" class="form-label">Recipient contact:{{ $data->ReceipientContact }}</label>
        <label for="inputCity" class="form-label">Your town:{{ $data->town }}</label>
        <label for="inputCity" class="form-label">Pickup Location:{{ $data->PickupStation }}</label>
        <label for="inputCity" class="form-label">Delivery Address:{{ $data->DeliveryAddress }}</label>
        <label for="town" class="form-label">Town Near You:{{ $data->branch }}</label>
        <label for="weight" class="form-label">Parcel Weight:{{ $data->weight }}</label>
        <h2 class="text-center">You will pay{{ $data->price }}</h2>

    <div class="col-12">
        <button type="submit" id="price-button" class="btn btn-primary">Submit</button>
      </div>

    </form>
</div>
@endsection
