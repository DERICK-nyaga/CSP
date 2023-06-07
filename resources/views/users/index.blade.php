@extends('partials.app')

@section('title', 'Homepage')
{{-- fetch the list of all the registered companies and their services  --}}
@section('content')
<div class="items">
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">G4S</h5>
                <p class="card-text">This is the leading company in the world...</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
                {{-- read me link to take me to description of all services offered by the company --}}
                {{-- visit me link to take me to a page to request parcel services  --}}
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Fargo Courier</h5>
                <p class="card-text">We deliver and operate worldwide best seller.</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Posta Kenya</h5>
                <p class="card-text">We operate under the postal services Kenya and deliver everywhere.</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">DHL</h5>
                <p class="card-text">We are an European company that operates on all grounds.</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">Americano Couriers</h5>
                <p class="card-text">We do even the unimaginable delivering at your footstep.</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>
    <div class="items-3">
        <div class="item">
            <div class="item-body">
                <i class="bi bi-eye"></i>
                <h5 class="card-title">BM</h5>
                <p class="card-text">We are the most prestigious and trusted courier company...</p>
                <a href="#" id="link" class="btn btn-info">Read Me</a>
                <a href="#" id="float-right" class="btn btn-warning">Visit Me</a>
            </div>
        </div>
    </div>

</div>


</div>

@endsection

