@extends('layouts.app')

@section('title', 'GoogleMaps')

@section('content')
@include('layouts.customernavbar')
    <form action="/parcel" method="post">
    <div id="googleMap"></div>
    <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(51.508742,-0.120850),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</form>

@endsection