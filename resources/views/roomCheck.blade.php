<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Patient Room</title>
    <link rel="stylesheet" href="asset/flat/flaticon.css">
    <link rel="stylesheet" href="asset/css/adminStyle.css">
</head>
<body>
     
    <div class="container-1">
        <div class="header">
            <img src="asset/images/user.png" alt="profile"> 
            <div class="img-content">
                <ul>
                    <li><b>habibur rahman</b></li>
                    <li><a href="{{route('admin.myProfile')}}"><i class="flaticon-user" aria-hidden="true" style="padding-right: 15px;"></i>My profile</a></li>
                    <li><a href="{{route('admin.changePassword')}}"><i class="flaticon-padlock" aria-hidden="true" style="padding-right: 15px;"></i>Change Password</a></li>
                    <li><a href="{{route('logout')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>logout</a></li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <ul>
                <br>
                <p class="h5" style="margin-left: 25px; text-transform: uppercase; font-style: italic;"><i class="flaticon-healthcare" aria-hidden="true" style="padding-right: 15px;"></i>E-Health care</p>
                <br>
                <li><a href="{{route('home.dashboard')}}"><i class="fa fa-desktop" aria-hidden="true" style="padding-right: 15px;"></i><span>Dashboard</span></a></li>

                <li><a href="{{route('user.index')}}"><i class="fa fa-user" aria-hidden="true" style="padding-right: 15px;"></i><span>Add User</span></a></li>

                <li><a href="{{route('user.viewUserList')}}"><i class="fa fa-users" aria-hidden="true" style="padding-right: 15px;"></i><span>View User list</span></a></li>
            
                <li><a href="{{route('room.roomView')}}"><i class="flaticon-health-insurance" aria-hidden="true"  style="padding-right: 15px;"></i><span>Check avaible room</span></a></li>

                <!-- <li><a href=""><i class="flaticon-surgery" aria-hidden="true"  style="padding-right: 15px;"></i><span>Operation Therate
                r</span></a></li> -->

                <li><a href="{{route('user.doctorReview')}}"><i class="
                    flaticon-review" aria-hidden="true"  style="padding-right: 15px;"></i><span>View Doctor review</span></a></li>

                <li><a href="{{route('user.transactionHistory')}}"><i class="fa fa-credit-card" aria-hidden="true" style="padding-right: 15px;"></i><span>Transaction history</span></a></li>

                <li><a href="{{route('user.userReport')}}"><i class="fa fa-flag" aria-hidden="true"  style="padding-right: 15px;"></i><span>User Report</span></a></li>

            </ul>
        </div>
        <div class="content">
            <div class="container" style="margin-left: 70px; margin-top: 150px; max-width: 1000px; background-color:#fff;margin-bottom:400px">
                <table class = "table">
                    <thead>
                        <tr>
                            <th>Room Number</th>
                            <th>Seat</th>
                            <th>Status</th>
                            <th>Price(tk)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>201</td>
                            <td>single bed</td>
                            <td>avaible</td>
                            <td>800</td>
                            <td><a href="{{route('room.roomBookView')}}" class="btn btn-warning">Booking</a></td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td>double bed</td>
                            <td>avaible</td>
                            <td>2000</td>
                            <td><a href="{{route('room.roomBookView')}}" class="btn btn-warning">Booking</a></td>

                        </tr>
                        <tr>
                            <td>302</td>
                            <td>double bed</td>
                            <td>avaible</td>
                            <td>2000</td>
                            <td><a href="{{route('room.roomBookView')}}" class="btn btn-warning">Booking</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="admin.js"></script>

</body>
</html>