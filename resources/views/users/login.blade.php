@extends('layouts.app')

@section('title', 'Login here')

@section('content')
{{-- display form errors for user login --}}
<div class="form-container">
    <div>
        <h1 class="text-center">Login Here</h1>
    </div>
    <form action="/login" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs" type="email" name="email" placeholder="Kindly provide the right email address" value="{{ old('email') }}">
      </div>

        <div class="f-groups">
        <input class="inputs" type="password" name="password" placeholder="Kindly set a strong password" value="">
      </div>

      <div class="register">
        <button id="bottom-center" class="btn btn-success" type="submit">Login Now</button>
    </div>

    </form>
</div>

@endsection
