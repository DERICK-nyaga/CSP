@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')
    @include('layouts.customernavbar')
<div class="contact-page">
    <h1 class="text-center">Contact Our Embu</h1>
</div>

<div id="float" class="one">
    <div class="inside">
        <div id="contacts">
            <div id="call">
                <h1>Our Mobile</h1>
                <span id="mobile">+2540903930393</span>
            </div>
            <div id="email">
                <h1>Our Branch Email</h1>
                <span><a id="purple" href="#" >embug4scustomers@gmail.com</a></span>
            </div>
        </div>

        <div class="contact-form">
            <form action="" method="POST">
                @csrf
                <div class="form-title">
                    <h1>Message Us here</h1>
                </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="You can email us and get response in less than 12 hours" value="">
        </div>
                <div class="mb-3">
                    <textarea name="message" placeholder="A complaint or a question" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                  </div>

                  <button id="bottom-center" class="btn btn-success" type="submit">Message us</button>
            </form>
        </div>
    </div>
</div>
@endsection
