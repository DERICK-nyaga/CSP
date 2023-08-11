@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')
<div class="online-booking">
    <div>
        <h1 class="text-center">Weight-input form</h1>
    </div>
<form action="/costing" method="POST" class="row g-3">
    @csrf
        {{-- <input name="user_id" type="hidden" class="form-control" placeholder="This will set user_id" value="{{ auth()->user()->id }}"> --}}
        {{-- <input type="hidden" > --}}
  <div class="col-md-6">
    <label for="weight" class="form-label">Parcel Weight:</label>
    <input type="text" name="weight" class="form-control" placeholder="The weight of the parcel in kilograms" value="{{ $data->weight }}">
  </div>
  <div class="col-12">
    <button type="submit" id="button" class="btn btn-primary">Next</button>
  </div>

</form>
</div>

@endsection

