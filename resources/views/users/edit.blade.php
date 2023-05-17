@extends('layouts.app')

@section('content')


<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users" method="GET">
        @csrf

        <div class="f-groups">
        <input class="inputs" type="text" name="fname" value="{{ $fname }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="lname" value="{{ $lname }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="email" name="email" value="{{ $email }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="mobile" value="{{ $mobile }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="password" name="password" value="">
        </div>
        <button class="btn btn-success" type="submit">Register Now</button>
    </form>
</div>
@endsection
