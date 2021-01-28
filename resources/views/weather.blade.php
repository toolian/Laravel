<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="block-weather">
      <div class="block-weather-city">
        <h3><a href="">Брянск</a></h3>
      </div>

      <div class="block-weather-date">
        <p>{{$date}}</p>
      </div>

      <div class="block-weather-temperature">
        <p>{{$temperature}}°C<img src="" alt=""> {{$weather}}</p>
      </div>
  </div>
</body>
</html>
