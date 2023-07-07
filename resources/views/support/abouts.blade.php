@extends('layouts.app')

@section('title', 'About Us')
@section('content')
    @include('layouts.customernavbar')
{{-- contents of this page should be fetched from the database on the company descriptions --}}
<div class="contact-page">
    <h1 class="text-center">Our Branch Info</h1>
</div>


<div id="float" class="one">
    <div class="inside">
        <div id="contacts">
            <div id="call">
                <h1>Our Mobile</h1>
                <span id="mobile">{{ $mobile }}</span>
            </div>
            <div id="email">
                <h1>Our Branch Email</h1>
                <span><a id="purple" href="#" >{{ $email }}</a></span>
            </div>
        </div>

        <div class="contact-form">
            <div id="branch">
                <h2>{{ $branch }} Branch</h1>
            </div>
            <div id="located">
                <label for="avenue">Located at: </label>
                <h2><strong>{{ $avenue }}</strong></h2>
                <label for="street">Street</label>
                <h2>{{ $street }}</h2>
                <label for="building">Building:</label>
                <h2>{{ $building }}</h2>
                <label for="floor">Floor: </label>
                <h2>{{ $floor }}</h2>
                <label for="rm#">Room: </label>
                <h2>{{ $room }}</h2>
            </div>
        </div>

        <div class="flex">
            <div class="opening-hrs">
                <h1>Opening hours</h1>
                <label for="weekdays">Mon-Friday: <h2>{{ $weekdaysopening }}</h2></label>
                <label for="weekends">Saturday: <h2>{{ $weekendsopening }}</h2></label>
              </div>

              <div class="closing-hrs">
                <h1>Closing hours</h1>
                <label for="weekdays">Mon-Friday: <h2>{{ $weekdaysclosing }}</h2></label>
                <label for="weekends">Saturday: <h2>{{ $weekendsclosing }}</h2></label>
              </div>
        </div>

    </div>
</div>

@endsection
