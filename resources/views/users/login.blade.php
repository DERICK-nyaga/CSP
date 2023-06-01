@extends('layouts.app')

@section('title', 'Login here')

@section('content')

<div class="form-container">
    <div>
        <h1 class="text-center">Login Here</h1>
    </div>
    <form action="/users" method="POST">
        @csrf

        <div class="f-groups">
        <input class="inputs @error('email') border-red @enderror" type="email" name="email" placeholder="Kindly provide the right email address" value="{{ old('email') }}">
            @error('email')
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

      <div class="register">
        <button id="bottom-center" class="btn btn-success" type="submit">Login Now</button>
    </div>

    </form>
</div>

@endsection
