@extends('layouts.app')

@section('title', 'Prices')
@section('content')
    @include('layouts.customernavbar')

<table class="table table-hover table-responsive table-bordered">
    <thead>
      <tr>
        <th scope="col">Price List</th>
        <th scope="col">Standard Parcels</th>
        <th scope="col">Bulk Parcels</th>
        <th scope="col">Fragile Parcels</th>
        <th scope="col">Weight</th>
        <th scope="col">Distances</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>0-10 kilos</td>
        <td>0-50 Kilos</td>
        <td>electronics</td>
        <td>0-10 kilos</td>
        <td>0-100 kilometers</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td>phones</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td></td>
        <td></td>
        <td>tv sets</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td></td>
        <td></td>
        <td>fridges</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td></td>
        <td></td>
        <td>glassware</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td></td>
        <td></td>
        <td>electric kettles</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td></td>
        <td></td>
        <td>microwaves</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td></td>
        <td></td>
        <td>laptops</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td></td>
        <td></td>
        <td>blenders</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td></td>
        <td></td>
        <td>tampered glasscookers</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">11</th>
        <td></td>
        <td></td>
        <td>washing machines</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">12</th>
        <td></td>
        <td></td>
        <td>Subwoofers</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">13</th>
        <td></td>
        <td></td>
        <td>Hometheatres</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">14</th>
        <td></td>
        <td></td>
        <td>Glass Kitchenware</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">15</th>
        <td></td>
        <td></td>
        <td>Iron boxes</td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
