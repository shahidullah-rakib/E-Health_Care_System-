<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add User</title>
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

                <li><a href="{{route('user.doctorReview')}}"><i class="
                    flaticon-review" aria-hidden="true"  style="padding-right: 15px;"></i><span>View Doctor review</span></a></li>
                <li><a href="{{route('user.transactionHistory')}}"><i class="fa fa-credit-card" aria-hidden="true" style="padding-right: 15px;"></i><span>Transaction history</span></a></li>
                <li><a href="{{route('user.userReport')}}"><i class="fa fa-flag" aria-hidden="true"  style="padding-right: 15px;"></i><span>User Report</span></a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container"
                style="background-color: white;max-height:520px; margin-left: 200px; max-width: 600px; padding: 20px; margin-top: 100px;">
                <h2>Add User</h2>
                <form action="" method="post">
                    <!-- csrf token -->
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="name" class="label">Userame</label>
                        <input type="text" placeholder="Enter username" class="form-control input">
                    </div>
                    <div class="form-group">
                        <label class="label">Email</label>
                        <input type="email" class="form-control input" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label class="label">Password</label>
                        <input type="password" class="form-control input" id="password" placeholder="Enter password"/>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                    
                    <div id='type-select'>
                        <label for="">Type</label>
                    <select name="type" id="problem" class="form-control">
                        <!-- <option selected>Select type</option> -->
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="patient">Patient</option>
                        <option value=" receptionist"> Receptionist</option>
                    </select>
                    </div>
                    <input type="submit" class="btn btn-info" style="padding:8px 50px;margin-top:20px;margin-left:180px;font-size:1.1rem" name="submit" value="Add">
                </form>
            </div>
        </div>
    </div>

    <script>
        const password = document.querySelector('#password');
        document.querySelector('#togglePassword').addEventListener('click',function(e){
                if(password.type === 'password'){
                    password.type='text';
                    //this means togglePassword
                    this.classList.toggle('bi-eye');
                }else{
                    password.type="password";
                    this.classList.toggle('bi-eye');
                }
            });

    </script>

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