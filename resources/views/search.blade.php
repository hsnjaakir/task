<!DOCTYPE html>
<html>

<head>
    <title>Laravel Search</title>
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
                            <option value=""> 2 </option>
                        </select>
                    </div>
                    <hr>
                    <div>
                        <input type="submit" value="Search" class="btn btn-secondary">
                    </div>
                </form>
                <hr style="width:100%;">
            </div>

            <table class="table table-striped">

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
                
                <tr>
                    <td>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['carrierCode'] }}
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['aircraft'] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['carrierCode'] }}
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['aircraft'] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['flightNumber'] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['flightNumber'] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['class'][0][0] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['class'][0][1] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['fareBasis'][0][0] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['fareBasis'][0][1] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['departure']['iataCode'] }}
                        <span>-</span>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['departure']['iataCode'] }}
                        <span>-</span>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['arrival']['iataCode'] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['departure']['at'] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['departure']['at'] }}
                    </td>

                    <td>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][0]['arrival']['at'] }}
                        <br>
                        {{ [$data][0]['flightOffer'][0]['itineraries'][0]['segments'][1]['arrival']['at'] }}
                    </td>

                    <td>{{ [$data][0]['flightOffer'][0]['itineraries'][0]['duration'] }}</td>

                    <td>{{ [$data][0]['flightOffer'][0]['price'] }} <br> <button class="btn btn-primary">Select</button> </td>
                </tr>
                
                

            </table>
        </div>
    </div>
</body>

</html>