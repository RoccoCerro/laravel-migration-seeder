<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Page Trains</h1>
  @foreach ($trains_all as $train)
    {{ $train->brand }}
    <br>
  @endforeach
  
  <p>tutti i treni</p>
  {{ $trains_all }}

  <br>
  
  <p>treni in partenza da oggi</p>
  {{$trains}}

  @dump($trains)
  @dump($trains_all)
  @dump(date(now()->format('Y-m-d')))
</body>
</html>