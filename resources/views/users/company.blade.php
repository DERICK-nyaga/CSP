@extends('partials.app')

@section('title', 'Homepage')

@section('content')

{{-- display the selected company and and a branches button to display all the company branches --}}
<div class="items">
{{--
    @foreach($companies as $company)
        <div class="items-3">
            <div class="item">
                <div class="item-body">
                    <i class="bi bi-eye"></i>
                    <h5 class="card-title">{{ $company->id }}</h5>
                    <h5 class="card-title">{{ $company->CompanyName }}</h5>
                    <p class="card-text">{{ $company->address }}</p>
                    <p class="card-text">{{ $company->location }}</p>
                    <a href="#" id="visitme"class="btn btn-warning">Visit Me</a>
                </div>
            </div>
        </div>
    @endforeach --}}

</div>

@endsection
{{-- company details based on price list and the description of the location and contacts --}}
