@extends('partials.app')

@section('title', 'Register')

@section('content')

<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs @error('fname') border-red @enderror" type="text" name="fname" placeholder="Kindly fill in your first name" value="{{ old('fname') }}">

          @error('fname')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="f-groups">
        <input class="inputs @error('lname') border-red  @enderror" type="text" name="lname" placeholder="Kindly fill in your last name" value="{{ old('lname') }}">
            @error('lname')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
      </div>

        <div class="f-groups">
        <input class="inputs @error('email') border-red @enderror" type="email" name="email" placeholder="Kindly provide the right email address" value="{{ old('email') }}">
            @error('email')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
      </div>

        <div class="f-groups">
        <input class="inputs @error('mobile') border-red @enderror" type="text" name="mobile" placeholder="Kindly fill in a correct mobile number" value="{{ old('mobile') }}">
            @error('mobile')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
      </div>

        <div class="f-groups">
        <input class="inputs @error('password') border-red @enderror" type="password" name="password" placeholder="Kindly set a strong password" value="">
            @error('password')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
      </div>

        <div class="f-groups">
        <input class="inputs @error('cpassword') border-red @enderror" type="password" name="cpassword" placeholder="Repeat same password as above" value="">
            @error('cpassword')
            <div class="error-red">
              {{ $message }}
            </div>
          @enderror
      </div>

      <div class="register">
        <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
    </div>

    </form>
</div>
@endsection
