<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Admin/Admin.css') }}">
</head>

<body>
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>User Feed Back</h2>

            </div>



            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>

                        <td>Number</td>
                        <td>Subject</td>
                        <td>Message</td>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $user = App\Http\Controllers\contactController::feedBack();
                        
                    @endphp
                    @foreach ($user as $i)
                        <tr>
                            <td>{{ $i['name'] }}</td>
                            <td>{{ $i['email'] }}</td>
                            <td>{{ $i['number'] }}</td>
                            <td>{{ $i['subject'] }}</td>
                            <td>{{ $i['message'] }}</td>


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
