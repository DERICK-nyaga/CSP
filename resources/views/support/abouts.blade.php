@extends('layouts.app')

@section('title', 'About Us')
@section('content')
    @include('layouts.customernavbar')

<div class="contact-page">
    <h1 class="text-center">Our Branch Info</h1>
</div>
        @foreach ($abouts as $key => $about)
        <div id="float" class="one">
        <div class="inside">
        <div id="contacts">
            <div id="call">
                <h1>Our Mobile</h1>
                <span id="mobile">+{{$about->mobile }}</span>
            </div>
            <div id="email">
                <h1>Our Branch Email</h1>
                <span><a id="purple" href="#" >{{ $about->email }}</a></span>
            </div>
        </div>

        <div class="contact-form">
            <div id="branch">
                <h2>{{ $about->branch }} Branch</h1>
            </div>
            <div id="located">
                <label for="avenue">Located at: </label>
                <h2 class="ml">{{ $about->avenue }} Avenue</h2>
                <label for="street">Street:</label>
                <h2 class="ml">{{ $about->street }} Street</h2>
                <label for="building">Building:</label>
                <h2 class="ml">{{ $about->building }}</h2>
                <label for="floor">Floor: </label>
                <h2 class="ml">{{ $about->floor }}</h2>
                <label for="rm#">Room: </label>
                <h2 class="ml">{{ $about->roomnumber }}</h2>
            </div>
        </div>

        <div class="flex">
            <div class="opening-hrs">
                <h1>Opening hours</h1>
                <label for="weekdays">Mon-Friday: <h2>{{ $about->weekdaysopening }}</h2></label>
                <label for="weekends">Saturday: <h2>{{ $about->weekendsopening }}</h2></label>
              </div>

              <div class="closing-hrs">
                <h1>Closing hours</h1>
                <label for="weekdays">Mon-Friday: <h2>{{ $about->weekdaysclosing }}</h2></label>
                <label for="weekends">Saturday: <h2>{{ $about->weekendsclosing }}</h2></label>
              </div>
        </div>

    </div>
    </div>
        @endforeach



@endsection
