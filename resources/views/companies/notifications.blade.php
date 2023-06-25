@extends('layouts.app')

@section('content')
    @include('layouts.comnavbar')

        <table class="table table-hover table-responsive table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Parcel Sender</th>
                <th scope="col">Location</th>
                <th scope="col">Contact</th>
                <th scope="col">Destination</th>
                <th scope="col">Request Time</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
                <td>07979999</td>
                <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
                <td>21.5.2023:11:45:20am</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
                <td>07979999</td>
                <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
                <td>21.5.2023:11:45:20am</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Thornton</td>
                <td>Nairobi Cbd,AfyaHouse 3rd floor,Rm234</td>
                <td>07979999</td>
                <td>Mombasa,Kisauni,MohammudBuilding,9thFloor,Rm109</td>
                <td>21.5.2023:11:45:20am</td>
            </tr>
            </tbody>
        </table>

@endsection
