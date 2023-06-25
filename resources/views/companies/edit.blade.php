@extends('layouts.app')

@section('title', 'Edit_Company_profile')

@section('content')
    @include('layouts.comnavbar')

        <div class="company-container">
            <div class="company">
                <h2  class="text-center">Edit Company Details</h2>
            </div>
            <form action="/companies" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <input type="text" name="CompanyName" class="form-control" placeholder="" value="{{ old('CompanyName') }}">
                </div>
                <div class="mb-3">
                    <input type="text" name="address" class="form-control" placeholder="" value="{{ old('address') }}">
                </div>
                <div class="mb-3">
                    <input type="text" name="location" class="form-control" placeholder="" value="{{ old('location') }}">
                </div>
                <div class="mb-3">
                    <textarea name="description" placeholder="" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ old('description') }}"></textarea>
                </div>
                <button id="bottom-center" class="btn btn-success" type="submit">Edit Now</button>
            </form>
        </div>

@endsection
