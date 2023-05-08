<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Migration</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>Template Migration Experiments</h1>
            <ul>
            @foreach ($trains as $train )
              <li> {{$train->train_code}} - {{$train->station_name_departure}}  - {{$train->departure_date_time}}</li>
                
            @endforeach
            </ul>
        </div>

    </body>
</html>
