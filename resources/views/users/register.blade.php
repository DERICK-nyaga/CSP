@extends('layouts.app')

@section('content')
<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs" type="text" name="fname" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="lname" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="email" name="email" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="mobile" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="password" name="password" value="">
        </div>
        <div class="f-groups">
        <input class="inputs" type="password" name="cpassword" value="">
        </div>
        <button class="btn btn-success" type="submit">Register Now</button>
    </form>
</div>


@endsection