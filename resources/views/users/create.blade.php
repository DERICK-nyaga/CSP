@extends('layouts.app')

@section('title', 'Register')
@section('content')

<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs" type="text" name="fname" value="" placeholder="Kindly fill in your first name" >
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="lname" value="" placeholder="Kindly fill in your last name">
        </div>
        <div class="f-groups">
        <input class="inputs" type="email" name="email" placeholder="Kindly provide the right email address" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="mobile" placeholder="Kindly fill in a correct mobile number" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="password" name="password" placeholder="Kindly set a strong password" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="password" name="cpassword" placeholder="Repeat same password as above" value="">
        </div>
        <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
    </form>
</div>
@endsection
