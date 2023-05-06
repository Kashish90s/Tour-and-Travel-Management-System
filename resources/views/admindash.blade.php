<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('Admin/Admin.css') }}">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="User">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Admin</span>
                    </a>
                    <a href="#">
                        <span class="Online">
                            <ion-icon name="ellipse"></ion-icon>
                        </span>
                        <span class="title">Online</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-microsoft"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="copy"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('viewPackage') }}">
                        <span class='icon'>
                            <ion-icon name="cube"></ion-icon>
                        </span>
                        <span class="title">Packages</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user') }}">
                        <span class='icon'>
                            <ion-icon name="people"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="#}">
                        <span class='icon'>
                            <ion-icon name="business"></ion-icon>
                        </span>
                        <span class="title">Hotels</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class='icon'>
                            <ion-icon name="bag-check"></ion-icon>
                        </span>
                        <span class="title">Sold Packages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class='icon'>
                            <ion-icon name="person-add"></ion-icon>
                        </span>
                        <span class="title">System Users</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <span class="menu-outline">
                    <ion-icon name="menu-outline"></ion-icon>
                </span>
            </div>

            {{-- <div class="search">
                <label>
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" placeholder="Search...">
                </label>
            </div> --}}
            {{-- <div class="notification">
                <ion-icon name="notifications-outline"></ion-icon>
                <span class="badge">5</span>
            </div> --}}
            {{-- <div class="message">
                <ion-icon name="mail-unread-outline"></ion-icon>
                <span class="badge">8</span>
            </div> --}}

            {{-- <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fHBlcnNvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt=""> --}}
            <div class="wrap" id="subMenu">
                <div class="menu">
                    <div class="info">
                        <a href="#" class="link" onclick="goToProfileSettings()">
                            <ion-icon name="person-circle-outline" class="name">

                            </ion-icon>
                            <p>Profile</p>
                            <span>></span>
                        </a>

                        <a href="#" class="link">
                            <ion-icon name="settings-outline" class="name">

                            </ion-icon>
                            <p>Settings</p>
                            <span>></span>
                        </a>

                        <a href="#" class="link" onclick="showLogoutConfirmation()">
                            <ion-icon name="exit-outline" class="name">

                            </ion-icon>
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
                <div id="logout-confirmation" class="dialog-box">
                    <p>Are you sure you want to logout?</p>

                    <div class="button-container">
                        <button class="btn-confirm" onclick="logout()">Yes</button>
                        <button class="btn-cancel" onclick="hideLogoutConfirmation()">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1000</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">50</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">100</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">500</div>
                        <div class="cardName">Earnings</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="logo-bitcoin"></ion-icon>
                    </div>
                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Bookings</h2>
                            {{-- <a href="#" class="btn">View All</a> --}}
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Package Name</td>
                                    <td>Number of guest</td>

                                    <td>Price</td>
                                    {{-- <td>Payment</td> --}}
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                    <tr>
                                        <td>{{ $i['destination'] }}</td>
                                        <td>{{ $i['no_guest'] }}</td>
                                        {{-- <td>Paid</td> --}}
                                        <td><span class="status received">Payment Successful</span></td>
                                    </tr>
                                @endforeach


                                {{-- <tr>
                                    <td>Room Booking</td>
                                    <td>$50</td>
                                    <td>Verifying</td>
                                    <td><span class="status pending">Booked</span></td>
                                </tr>

                                <tr>
                                    <td>Gosaikunda Hike</td>
                                    <td>$30</td>
                                    <td>Cancelled</td>
                                    <td><span class="status cancelled">Refund</span></td>
                                </tr>

                                <tr>
                                    <td>Pokhara Tour</td>
                                    <td>$40</td>
                                    <td>Cancelled</td>
                                    <td><span class="status cancelled">Refund</span></td>
                                </tr>

                                <tr>
                                    <td>Manakamana Package</td>
                                    <td>$90</td>
                                    <td>Due</td>
                                    <td><span class="status inProgress">In Progress</span></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Recent Customers</h2>
                        </div>
                        {{-- @php
                            $user = App\Http\Controllers\user_controller::showPackages();

                        @endphp --}}


                        @foreach ($data as $i)
                            <table>
                                <tr>

                                    <td width="60px">
                                        <div class="imgBox"><img src="{{ asset($i['img_path']) }}" alt=""></div>
                                    </td>



                                    <td>
                                        <h4>{{ $i['fname'] . ' ' . $i['lname'] }} <br><span>{{ $i['address'] }}</span>
                                        </h4>
                                    </td>
                                </tr>
                            </table>
                        @endforeach

                        {{-- <tr>
                                    <td width="60px">
                                        <div class="imgBox"><img src="biraj.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Biraj <br><span>Kathmandu</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBox"><img src="kashish.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Kashish <br><span>Kathmandu</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBox"><img src="jyoti.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Jyoti <br><span>Kathmandu</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBox"><img src="isha.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Isha <br><span>Kathmandu</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBox"><img src="asif.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Asif <br><span>Kathmandu</span></h4>
                                    </td>
                                </tr> --}}
                        {{-- </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Admin/Admin.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
