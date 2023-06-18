@extends('partials.app')

@section('content')

<div class="form-container">
    <div>
        <h1 class="text-center">Register Form</h1>
    </div>
    <form action="/users/{{ $user->id }}" method="GET">
        @csrf
            @method('PUT')

        <div class="f-groups">
        <input class="inputs" type="text" name="fname" value="{{ $user->fname }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="lname" value="{{ $user->lname }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="f-groups">
        <input class="inputs" type="text" name="mobile" value="{{ $user->mobile }}">
        </div>
        <button class="btn btn-success" type="submit">Edit Profile</button>
    </form>
</div>

@endsection
