@extends('layouts.app')
@section('title', 'Admindashboard')

@section('content')
    @include('layouts.comnavbar')

        <div class="dashboard">
            <div class="dash-card">
                <h2>4355 Unpicked parcels</h2>
            </div>
            <div class="dash-card">
                <a class="btn-warning" href="">Add Branch</a>
            </div>
            <div class="dash-card">
                <a class="btn-warning" href="">Add About Info</a>
            </div>
            <div class="dash-card">
                <a class="btn-warning" href="">Add Services</a>
            </div>
            <div class="dash-card">
                <h2>2453 Unpaid Parcels</h2>
            </div>
            <div class="dash-card">
                <h2>234 Dropoffs</h2>
            </div>
            <div class="dash-card">
                <h2>192 Cancelled Dropoffs</h2>
            </div>
            <div class="big-dash">
                <div class="check">
                    <h3>Total complaints this week</h3>
                </div>
                <h2>434 Complaints</h2>
            </div>
            <div class="big-dash">
                <div class="check">
                    <h3>Scheduled Dropoffs-Pickups</h3>
                </div>
                <h2>392 Schedules</h2>
                <small>Attendance time is in 3hrs time</small>
            </div>
            <div class="big-dash">
                <div class="check">
                    <h3>Company Branches</h3>
                </div>
                <h2>392 Branches</h2>
                <a href="#" class="">check them&rarr;</a>
            </div>
        </div>

@endsection
