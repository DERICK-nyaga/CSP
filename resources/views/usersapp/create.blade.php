@extends('layouts.app')

@section('title', 'Register')

@section('content')

{{-- display errors in the form  --}}
<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs" type="text" name="fname" placeholder="Kindly fill in your first name" value="{{ old('fname') }}">
        </div>

        <div class="f-groups">
        <input class="inputs" type="text" name="lname" placeholder="Kindly fill in your last name" value="{{ old('lname') }}">
      </div>

        <div class="f-groups">
        <input class="inputs" type="text" name="username" placeholder="Kindly fill in your username" value="{{ old('username') }}">
      </div>

        <div class="f-groups">
        <input class="inputs" type="email" name="email" placeholder="Kindly provide the right email address" value="{{ old('email') }}">
      </div>

        <div class="f-groups">
        <input class="inputs" type="text" name="mobile" placeholder="Kindly fill in a correct mobile number" value="{{ old('mobile') }}">
      </div>

        <div class="f-groups">
        <input class="inputs" type="password" name="password" placeholder="Kindly set a strong password" value="">
      </div>

        <div class="f-groups">
        <input class="inputs" type="password" name="cpassword" placeholder="Repeat same password as above" value="">
      </div>

      <div class="register">
        <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
    </div>

    </form>
</div>
@endsection
