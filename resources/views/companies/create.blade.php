@extends('layouts.app')

@section('title', 'Register your company')
@section('content')

    @include('layouts.comnavbar')
        <div class="company-container">
            <div class="company">
                <h2  class="text-center">Register Company</h2>
            </div>

            <form action="/companies" method="POST">
                @csrf

                <div class="mb-3">
                    <input type="text" name="CompanyName" class="form-control" placeholder="Only a registered by GoK company is allowed" value="">
                </div>
                <select name="branches" class="form-select" aria-label="Default select example">
                    <option selected>Branch</option>
                    <option value="main">Main Branch</option>
                    <option value="branch">Branch</option>
                </select>
                <div class="mb-3">
                    <input type="number" name="town" class="form-control" placeholder="Town name" value="">
                </div>
                <button id="bottom-center" class="btn btn-success" type="submit">Register Now</button>
            </form>
        </div>

@endsection
