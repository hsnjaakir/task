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
                    <th>User Id</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row['userId'] }}</td>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['title'] }}</td>
                    <td>{{ $row['body'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>