<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>chnage</title>
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

                <!-- <li><a href=""><i class="flaticon-surgery" aria-hidden="true"  style="padding-right: 15px;"></i><span>Operation Therater</span></a></li> -->

                <li><a href="{{route('user.doctorReview')}}"><i class="
                    flaticon-review" aria-hidden="true"  style="padding-right: 15px;"></i><span>View Doctor review</span></a></li>
                <li><a href="{{route('user.transactionHistory')}}"><i class="fa fa-credit-card" aria-hidden="true" style="padding-right: 15px;"></i><span>Transaction history</span></a></li>
                <li><a href="{{route('user.userReport')}}"><i class="fa fa-flag" aria-hidden="true"  style="padding-right: 15px;"></i><span>User Report</span></a></li>
            </ul>
        </div>
        <div class="content" style="background-color:#fff">
        <div class="changePassword" >
                <!-- <h1 style="font-weight: normal;font-size: 1.4rem; margin-bottom: 40px;">Change Password</h1> -->
                <img src="asset/images/password.jpg" alt="" width="200px" style="width:200px;height:200px;margin-top: 40px;"><br><br><br>
                <form method="POST" >
                    {{@csrf_field()}}
                    <input type="password" name="currentPass" id="currentPass" placeholder="Current Password"><br>
                    <label id="lcurrent" style="color: red;font-size: .5rem;"></label><br>
    
                    <input type="password" name="newPassword" id="newPass" placeholder="New Password"><br>
                    <label id="lnew" style="color: red;font-size: .8rem;"></label><br>
                    <input type="password" name="retypePassword" id="retypePass" placeholder="Confirm New Password"><br>
    
                    <label id="lretype" style="color: red;font-size: .8rem;"></label><br>
                    <div id="password-container" style="padding: 20px 0px;">
                        <input class="btn btn-dark" type="submit" name="submit" value="Change Password">
                    </div>
                </form>
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