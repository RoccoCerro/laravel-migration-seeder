@extends("layouts.app")

@section("main")
<h1>Page Trains</h1>

<p>treni in partenza da oggi</p>
<div class="container">
  <table class="my_table">
    <tr>
      <td>brand</td>
  
      <td>arrival_station</td>
    
      <td>departure_station</td>
    
      <td>date</td>
  
      <td>departure_time</td>
    
      <td>arrival_time</td>

      <td>train_code</td>
  
      <td>number_of_carriages</td>

      <td>in_time</td>
  
      <td>deleted</td>
    </tr>
    @foreach ($trains as $train)
    <tr class="my_table-content">
      <td class="padding15">{{ $train->brand }}</td>
      <td class="padding15">{{ $train->arrival_station}}</td>
      <td class="padding15">{{ $train->departure_station }}</td>
      <td class="padding15">{{ $train->date }}</td>
      <td class="padding15">{{ $train->departure_time }}</td>
      <td class="padding15">{{ $train->arrival_time }}</td>
      <td class="padding15">{{ $train->train_code }}</td>
      <td class="padding15">{{ $train->number_of_carriages }}</td>
      <td class="padding15">{{ $train->in_time }}</td>
      <td class="padding15">{{ $train->deleted }}</td>
    </tr>
  </table>
  @endforeach
</div>
@endsection