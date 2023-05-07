<!DOCTYPE html>
<html>

<head>
    <title>PDF of Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Payment Details</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            {{-- <th>Product ID</th> --}}
            <th>Amount</th>
            <th>Esewa Status</th>
            <th>Created At</th>
            {{-- <th>Updated At</th> --}}
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td>{{ $user->product_id }}</td> --}}
                <td>{{ $user->amount }}</td>
                <td>{{ $user->esewa_status }}</td>
                <td>{{ $user->created_at }}</td>
                {{-- <td>{{ $user->updated_at }}</td> --}}
            </tr>
        @endforeach
    </table>
</body>

</html>
