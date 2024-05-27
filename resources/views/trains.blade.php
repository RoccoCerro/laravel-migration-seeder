@extends("layouts.app")

@section('Title', "Page")

@section("main")
<h1>Page Trains</h1>

<p>treni in partenza da oggi</p>
<div class="container">
  <table class="my_table">
    <tr>
      <th>brand</th>
      <th>arrival_station</th>
      <th>departure_station</th>
      <th>departure_time</th>
      <th>arrival_time</th>
      <th>train_code</th>
      <th>number_of_carriages</th>
      <th>in_time</th>
      <th>deleted</th>
    </tr>
    @foreach ($trains as $train)
    <tr class="my_table-content">
      <td class="">{{ $train->brand }}</td>
      <td class="">{{ $train->arrival_station}}</td>
      <td class="">{{ $train->departure_station }}</td>
      <td class="">{{ $train->departure_time }}</td>
      <td class="">{{ $train->arrival_time }}</td>
      <td class="">{{ $train->train_code }}</td>
      <td class="">{{ $train->number_of_carriages }}</td>
      <td class="">{{ $train->in_time }}</td>
      <td class="">{{ $train->deleted }}</td>
    </tr>
    @endforeach
  </table>
</div>

<form action="{{ route('home') }}">
    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">HomePage</button>
    </div>
</form>
@endsection