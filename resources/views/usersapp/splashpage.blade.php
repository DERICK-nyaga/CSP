@extends('layouts.app')

@section('content')

<div class="splash">
    <div class="splash-btn">
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    </div>
    <div class="splash-btn">
        <a href="{{ route('login') }}" class="btn btn-outline-dark">Login</a>
    </div>
</div>
@endsection
