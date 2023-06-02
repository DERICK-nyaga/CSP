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
    <input name="tracking_number" type="hidden" class="form-control" placeholder="tracking number">
  </div>
  <div class="col-md-6">
    <input type="hidden" name="category" class="form-control " id="inputPassword4" placeholder="Parcel category">
  </div>
    <button type="submit" id="button" class="btn btn-primary">Next</button>
  </div>
</form>
</div>
@endauth

@guest
    {{ route('/') }}
@endguest


@endsection
