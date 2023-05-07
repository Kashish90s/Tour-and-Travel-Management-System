<!DOCTYPE html>
<html>

<head>
    <title>PDF of Booking page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Valid Customer, <br> Here is the booking details for your trip</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Destination</th>
            <th>Number of Guest</th>
            <th>Arrival</th>
            <th>Leaving</th>
        </tr>
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->destination }}</td>
            <td>{{ $users->no_guest }}</td>
            <td>{{ $users->arrival }}</td>
            <td>{{ $users->leaving }}</td>
        </tr>
    </table>
</body>

</html>
