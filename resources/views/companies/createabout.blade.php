@extends('layouts.app')

@section('title', 'Add Company Details')
@section('content')

@include('layouts.comnavbar')
<div class="company-container">
    <div class="company">
        <h2  class="text-center">Add Company Details</h2>
    </div>

    <form action="/companies" method="POST">
        @csrf

        <div class="form-floating mb-3">
            <input name="town" type="text" class="form-control" id="floatingInput" placeholder="Town where company is located">
            <label for="floatingInput">Town</label>
          </div>
          <div class="form-floating mb-3">
            <input name="avenue" type="text" class="form-control" id="floatingInput" placeholder="Branch Avenue name">
            <label for="floatingInput">Avenue</label>
          </div>
          <div class="form-floating mb-3">
            <input name="street" type="text" class="form-control" id="floatingInput" placeholder="Street name">
            <label for="floatingInput">Street</label>
          </div>
                  <div class="form-floating mb-3">
            <input name="building" type="text" class="form-control" id="floatingInput" placeholder="Building name">
            <label for="floatingInput">Building</label>
          </div>
          <div class="form-floating mb-3">
            <input name="floor" type="text" class="form-control" id="floatingInput" placeholder="Floor number">
            <label for="floatingInput">Floor</label>
          </div>
          <div class="form-floating mb-3">
            <input name="rmnumber" type="text" class="form-control" id="floatingInput" placeholder="Room number">
            <label for="floatingInput">Room number</label>
          </div>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Company's email">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input name="mobile" type="text" class="form-control" id="floatingInput" placeholder="Company's mobile">
            <label for="floatingInput">Mobile</label>
          </div>
          <div class="form-floating">
            <input name="weekdaysopening" type="time" class="form-control" id="floatingPassword" placeholder="Weekdays opening time">
            <label for="floatingPassword">Weekdays Opening</label>
          </div>
          <div class="form-floating">
            <input name="weekendsopening" type="time" class="form-control" id="floatingPassword" placeholder="Weekends opening time">
            <label for="floatingPassword">Weekends Opening</label>
          </div>
          <div class="form-floating">
            <input name="weekdaysclosing" type="time" class="form-control" id="floatingPassword" placeholder="Weekdays closing time">
            <label for="floatingPassword">Weekdays Closing</label>
          </div>
          <div class="form-floating">
            <input name="weekendclosing" type="time" class="form-control" id="floatingPassword" placeholder="Weekends closing time">
            <label for="floatingPassword">Weekends Closing</label>
          </div>

        <button id="bottom-center" class="btn btn-success" type="submit">Add Abouts</button>
    </form>
</div>

@endsection
