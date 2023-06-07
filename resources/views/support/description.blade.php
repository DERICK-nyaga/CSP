@extends('partials.app')

@section('title', 'About Us')
@section('content')

{{-- contents of this page should be fetched from the database on the company descriptions --}}
<div class="contact-page">
    <h1 class="text-center">Our Branch Info</h1>
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
            <div id="branch">
                <h2>Embu Branch</h1>
            </div>
            <div id="located">
                <label for="avenue">Located at: </label>
                <h2><strong>Kenyatta Avenue</strong></h2>
                <label for="street">Street</label>
                <h2>Innovation street</h2>
                <label for="building">Building:</label>
                <h2>Capstone Building</h2>
                <label for="floor">Floor: </label>
                <h2>3rd Floor</h2>
                <label for="rm#">Room: </label>
                <h2>Rm 345</h2>
            </div>
        </div>

        <div class="flex">
            <div class="opening-hrs">
                <h1>Opening hours</h1>
                <label for="weekdays">Mon-Friday: <h2>06:40hrs</h2></label>
                <label for="weekends">Saturday: <h2>07:30hrs</h2></label>
              </div>

              <div class="closing-hrs">
                <h1>Closing hours</h1>
                <label for="weekdays">Mon-Friday: <h2>18:00hrs</h2></label>
                <label for="weekends">Saturday: <h2>16:30hrs</h2></label>
              </div>
        </div>

    </div>
</div>
@endsection
