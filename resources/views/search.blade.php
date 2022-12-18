<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
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
                        <input type="text" placeholder="LHR"><br>
                        <input type="text" placeholder="CDG"><br>
                        <input type="date"><br>
                        <select>
                            <option value=""> Day+ </option>
                        </select>
                        <select>
                            <option value=""> Day- </option>
                        </select>
                        <select>
                            <option value=""> Anytime </option>
                        </select> <span style="padding:10px 4px 4px 4px">+</span>
                        <select>
                            <option value=""> ADT </option>
                        </select>
                        <select>
                            <option value=""> 1 </option>
                        </select>
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
                <tr>
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

                    @foreach($data['flightOffer'] as $key=>$value)
                    <tr>

                        @foreach($value['fareBasis'] as $keys=>$fareBasis)
                        {{-- @foreach($value['itineraries'] as  $b)--}}
                        {{-- @foreach($b['segments'] as  $d)--}}


                        {{-- <td>{{$d['marketingCarrier']." ".$d['aircraft']}}</td>--}}
                        {{-- <td>{{$d['flightNumber']}}</td>--}}
                        {{-- <td>{{$value['class'][0][$keys]}}</td>--}}
                        {{-- <td>{{$fareBasis[$keys]}}</td>--}}
                        {{-- <td>{{$d['departure']['iataCode']}}-{{$d['arrival']['iataCode']}}</td>--}}
                        {{-- <td>{{$d['departure']['at']}}</td>--}}
                        {{-- <td>{{$d['arrival']['at']}}</td>--}}
                        {{-- <td>{{$b['duration']}}</td>--}}
                        {{-- <td>{{$value['price']}}</td>--}}

                        {{-- @endforeach--}}
                        {{-- @endforeach--}}
                        {{-- @endforeach--}}
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$d['marketingCarrier']." ".$d['aircraft']}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$d['flightNumber']}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$value['class'][0][$keys]}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$fareBasis[$keys]}}.<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$d['departure']['iataCode']}}-{{$d['arrival']['iataCode']}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$d['arrival']['at']}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $b)
                            @foreach($b['segments'] as $d)
                            {{$d['arrival']['at']}}<br>
                            @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($value['itineraries'] as $da)
                            {{$da['duration']}}<br>
                            @endforeach
                        </td>
                        <td>{{$value['price']}}<br> <button class="btn btn-primary">Select</button></td>
                    </tr>
                    @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>