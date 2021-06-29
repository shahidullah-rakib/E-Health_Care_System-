<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>User List</title>
    <link rel="stylesheet" href="asset/flat/flaticon.css">
    <link rel="stylesheet" href="asset/css/adminStyle.css">
</head>
<body>
     
    <div class="container-1">
        <div class="header">
          <div class="input-group" style="margin-left:50px">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" placeholder="Search" style="width:300px;"/>
            </div>
            <button type="button" class="btn btn-primary" style="height:37px;margin-top:1px">
              <i class="flaticon-loupe"></i>
            </button>
        </div>
        <!-- <a href="{{route('user.userReport')}}" style="margin-right:100px;margin-top:-5px">
          <span class="badge rounded-pill badge-notification bg-danger" style="color:#fff;">999+</span>
          <i class="fas fa-envelope fa-lg"></i>
        </a> -->
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
        <div class="content">
            <div class="container"style="margin-left: 70px; max-width: 1100px;">
            <!-- <div id="search">
                <input id="src-input" type="text" name="search" placeholder="Search" onkeyup="searchUser()">
	         </div><br><br><br> -->
           
                <table class="table" style="background-color: #fff;">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>John</td>
                          <td>john@example.com</td>
                          <td>Admin</td>
                          <td>
                            <a class="btn btn-primary" href="{{route('user.editUserView')}}">Edit</a>
                            <a class="btn btn-warning" href="">Block</a>
                            <a class="btn btn-danger" href="">delete</a>
                            <a class="btn" href="{{route('user.viewUserDetails')}}" style="background-color:#eb8d5e;color:#fff">View Details</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>mary@example.com</td>
                          <td>Doctor</td>
                          <td>
                            <a class="btn btn-primary" href="{{route('user.editUserView')}}">Edit</a>
                            <a class="btn btn-warning" href="">Block</a>
                            <a class="btn btn-danger" href="">delete</a>
                            <a class="btn" href="" style="background-color:#eb8d5e;color:#fff">View Details</a>

                          </td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>july@example.com</td>
                          <td>Patient</td>
                          <td>
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-warning" href="">Block</a>
                            <a class="btn btn-danger" href="">delete</a>
                            <a class="btn" href="" style="background-color:#eb8d5e;color:#fff">View Details</a>

                          </td>
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