@extends('layouts.app')

@section('title', 'Add Company Details')
@section('content')

@include('layouts.comnavbar')
<div class="about-container">
    <div class="company">
        <h2  class="text-center">Add Company Details</h2>
    </div>

    <form action="/companies" method="POST" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label for="labels">Town</label>
            <input name="town" type="text" class="form-control width" id="floatingInput" placeholder="Town where company is located">
          </div>
          <div class="col-md-6">
            <label for="labels">Avenue</label>
            <input name="avenue" type="text" class="form-control width" id="floatingInput" placeholder="Branch Avenue name">
          </div>
          <div class="col-md-6">
            <label for="labels">Street</label>
            <input name="street" type="text" class="form-control width" id="floatingInput" placeholder="Street name">
          </div>
             <div class="col-md-6">
                <label for="labels">Building</label>
            <input name="building" type="text" class="form-control width" id="floatingInput" placeholder="Building name">
          </div>
          <div class="col-md-6">
            <label for="labels">Floor</label>
            <input name="floor" type="text" class="form-control width" id="floatingInput" placeholder="Floor number">
          </div>
          <div class="col-md-6">
            <label for="labels">Room number</label>
            <input name="rmnumber" type="text" class="form-control width" id="floatingInput" placeholder="Room number">
          </div>
          <div class="col-md-6">
            <label for="labels">Email</label>
            <input name="email" type="email" class="form-control width" id="floatingInput" placeholder="Company's email">
          </div>
          <div class="col-md-6">
            <label for="labels">Mobile</label>
            <input name="mobile" type="text" class="form-control width" id="floatingInput" placeholder="Company's mobile">
          </div>
          <div class="col-md-6">
            <label for="labels">Weekdays Opening</label>
            <input name="weekdaysopening" type="time" class="form-control width" id="floatingPassword" placeholder="Weekdays opening time">
          </div>
          <div class="col-md-6">
            <label for="labels">Weekends Opening</label>
            <input name="weekendsopening" type="time" class="form-control width" id="floatingPassword" placeholder="Weekends opening time">
          </div>
          <div class="col-md-6">
            <label for="labels">Weekdays Closing</label>
            <input name="weekdaysclosing" type="time" class="form-control width" id="floatingPassword" placeholder="Weekdays closing time">
          </div>
          <div class="col-md-6">
            <label for="labels">Weekends Closing</label>
            <input name="weekendclosing" type="time" class="form-control width" id="floatingPassword" placeholder="Weekends closing time">
          </div>

        <button id="bottom-center" class="btn btn-success" type="submit">Add Abouts</button>
    </form>
</div>

@endsection
