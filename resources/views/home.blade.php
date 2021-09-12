<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <h1>I nostri viaggi disponibili</h1>
        @foreach($all_trips as $trip)
            <div class="card">
                <div>departure : {{$trip['departure']}}</div>
                <div>arrival : {{$trip['arrivals']}}</div>
                <div>{{$trip['description']}}</div>
                <div>distance:{{$trip['distance']}}km </div>
                <div>medium :{{$trip['medium']}}</div>
                <div>price :{{$trip['price']}}$</div>
            </div>
        @endforeach
        
        <h1>I nostri viaggi in treno</h1>
        @foreach($trip_with_train as $trip)
            <div class="card">
                <div>departure : {{$trip['departure']}}</div>
                <div>arrival : {{$trip['arrivals']}}</div>
                <div>{{$trip['description']}}</div>
                <div>distance:{{$trip['distance']}}km </div>
                <div>medium :{{$trip['medium']}}</div>
                <div>price :{{$trip['price']}}$</div>
            </div>
        @endforeach

        <h1>I nostri viaggi in aereo</h1>
        @foreach($trip_with_airplane as $trip)
            <div class="card">
                <div>departure : {{$trip['departure']}}</div>
                <div>arrival : {{$trip['arrivals']}}</div>
                <div>{{$trip['description']}}</div>
                <div>distance:{{$trip['distance']}}km </div>
                <div>medium :{{$trip['medium']}}</div>
                <div>price :{{$trip['price']}}$</div>
            </div>
        @endforeach

    </body>
</html>
