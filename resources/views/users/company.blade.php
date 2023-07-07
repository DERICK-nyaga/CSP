@extends('layouts.app')

@section('title', 'Company')

@section('content')
    @include('layouts.customernavbar')
{{-- display the selected company and and a branches button to display all the company branches --}}
{{-- <div class="company">
    <h2>this is the company's page</h2>
    {{ $company->companyName }}

</div> --}}

@endsection
{{-- company details based on price list and the description of the location and contacts --}}
