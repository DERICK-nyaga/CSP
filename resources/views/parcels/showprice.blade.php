@extends('layouts.app')

@section('title', 'Send Parcel')

@section('content')
@include('layouts.customernavbar')

<div class="show-price">
    <form action="{{ route('') }}" method="post">
        <div class="modal-body">
            <h2 class="fs-5">this will display the price dynamically</h2>
            <p>This <button class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</button> triggers a popover on click.</p>
            
            <h2 class="fs-5">Tooltips in a modal</h2>
            <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
          </div>
    </form>
</div>

@endsection
