<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    tr:first-of-type{
      font-weight: bold;
    }

    td{
      padding: 10px;
    }
  </style>
</head>
<body>
  <h1>Page Trains</h1>

  <p>treni in partenza da oggi</p>
  <div class="container">
    <div class="row">
      <div class="col">
        <table>
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
          <tr>
            <td>{{ $train->brand }}</td>
            <td>{{ $train->arrival_station}}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->date }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->number_of_carriages }}</td>
            <td>{{ $train->in_time }}</td>
            <td>{{ $train->deleted }}</td>
          </tr>
        </table>
      </div>
      @endforeach
    </div>
  </div>

</body>
</html>