@extends('layouts.app')

@section('content')
    @include('layouts.comnavbar')

        <div class="items">
        {{--
            @foreach($companies as $company)
                <div class="items-3">
                    <div class="item">
                        <div class="item-body">
                            <i class="bi bi-eye"></i>
                            <form action="">
                                @csrf
                                <input type="hidden" value="{{ $company->id }}">
                            </form>
                            <h5 class="card-title">{{ $company->CompanyName }}</h5>
                            <p class="card-text">{{ $company->address }}</p>
                            <p class="card-text">{{ $company->location }}</p>
                            <a href="#" id="visitme"class="btn btn-warning">Visit Me</a>
                        </div>
                    </div>
                </div>
            @endforeach --}}


            <div class="items-3">
                <div class="item">
                    <div class="item-body">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">Fargo Courier</h5>
                        <p class="card-text">We deliver and operate worldwide best seller.</p>
                        <a href="#" id="readme" class="btn btn-info">Read Me</a>
                        <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
                    </div>
                </div>
            </div>
            <div class="items-3">
                <div class="item">
                    <div class="item-body">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">Posta Kenya</h5>
                        <p class="card-text">We operate under the postal services Kenya and deliver everywhere.</p>
                        <a href="#" id="readme" class="btn btn-info">Read Me</a>
                        <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
                    </div>
                </div>
            </div>
            <div class="items-3">
                <div class="item">
                    <div class="item-body">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">DHL</h5>
                        <p class="card-text">We are an European company that operates on all grounds.</p>
                        <a href="#" id="readme" class="btn btn-info">Read Me</a>
                        <a href="#"id="visitme" class="btn btn-warning">Visit Me</a>
                    </div>
                </div>
            </div>
            <div class="items-3">
                <div class="item">
                    <div class="item-body">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">Americano Couriers</h5>
                        <p class="card-text">We do even the unimaginable delivering at your footstep.</p>
                        <a href="#" id="readme" class="btn btn-info">Read Me</a>
                        <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
                    </div>
                </div>
            </div>
            <div class="items-3">
                <div class="item">
                    <div class="item-body">
                        <i class="bi bi-eye"></i>
                        <h5 class="card-title">BM</h5>
                        <p class="card-text">We are the most prestigious and trusted courier company...</p>
                        <a href="#" id="readme" class="btn btn-info">Read Me</a>
                        <a href="#" id="visitme" class="btn btn-warning">Visit Me</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

@endsection



