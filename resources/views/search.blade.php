<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        select {
            padding: 10px;
            width: 150px;
            margin-right: 10px;
        }

        input {
            padding-left: 8px;
            width: 150px;
            margin-right: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            border-collapse: collapse;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="width:100%">
                <h3>Laravel Search</h3><br>
                <hr style="width:100%;">
                <form action="" method="GET">
                    <div style="width:100%; display:flex">
                        <input class="border" type="text" placeholder="LHR"><br>
                        <input class="border" type="text" placeholder="CDG"><br>
                        <input class="border" type="date"><br>
                        <select class="border">
                            <option value=""> Day- </option>
                        </select>
                        <select class="border">
                            <option value=""> Day+ </option>
                        </select>
                        <select class="border">
                            <option value=""> Anytime </option>
                        </select> <span style="padding:10px 4px 4px 4px">+</span>
                        <select class="border">
                            <option value=""> ADT </option>
                        </select>
                        <select class="border">
                            <option value=""> 1 </option>
                        </select> <span style="padding:10px 4px 4px 4px">+</span>
                    </div>
                    <hr>
                    <div align="right">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </form>
                <hr style="width:100%;">
            </div>
            <h5>{{[$data][0]['message']}}</h5>

            <table style="width:100%;">
                <tr style="background-color: #f2f2f2;">
                    <th>FLIGHT</th>
                    <th>AIRCRAFT</th>
                    <th>CLASS</th>
                    <th>FARE</th>
                    <th>ROUTE</th>
                    <th>DEPARTURE</th>
                    <th>ARRIVAL</th>
                    <th>DURATION</th>
                    <th>PRICE</th>
                </tr>

                <tbody>

                    @foreach($data['flightOffer'] as $flightOffer)
                    
                    <tr>
                        @foreach($flightOffer['itineraries'] as $itineraries)
                        <td>
                            @foreach($itineraries['segments'] as $segments)
                            {{$segments['marketingCarrier']." ".$segments['aircraft']}}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($itineraries['segments'] as $segments)
                            {{$segments['flightNumber']}}<br>
                            @endforeach 
                        </td>
                        <td>
                            @foreach($flightOffer['fareBasis'][0] as $keys=>$fareBasis)
                            {{$flightOffer['class'][0][$keys]}}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['fareBasis'][0] as $keys=>$fareBasis)
                            {{$fareBasis}}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($itineraries['segments'] as $segments)
                            {{$segments['departure']['iataCode']}}-{{$segments['arrival']['iataCode']}}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($itineraries['segments'] as $segments)
                            {{$segments['arrival']['at']}}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($itineraries['segments'] as $segments)
                            {{$segments['arrival']['at']}}<br>
                            @endforeach
                        </td>
                        <td>
                            {{$itineraries['duration']}}<br>
                        </td>
                        <td>{{$flightOffer['price']}}<br> <button class="btn btn-primary">Select</button></td>
                        @endforeach
                    </tr>
                    
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>