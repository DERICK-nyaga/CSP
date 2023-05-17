@extends('layouts.app')

@section('content')

<div class="comapny-container">
    <div class="company">
        <h2  class="text-center">Register Company</h2>
    </div>
    <form action="/companies" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="CompanyName" class="" placeholder="Only a registered by GoK company is allowed" value="">
        </div>
        <div class="form-group">
            <textarea name="description" class="" placeholder="Company description " value=""></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="" placeholder="Company phone number" value="">
        </div>
        <div class="form-group">
            <input type="number" name="location" class="" placeholder="Company's Location" value="">
        </div>
        <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
    </form>
</div>

@endsection
