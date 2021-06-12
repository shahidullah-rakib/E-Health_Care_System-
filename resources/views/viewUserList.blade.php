<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>View User </title>
    <link rel="stylesheet" href="assects/flat/flaticon.css">
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>
    
    <div class="container-1">
        <div class="header">
            <img src="assects/imgages/user.png" alt="profile"> 
            <div class="img-content">
                <ul>
                    <li>habibur rahman</li>
                    <li><a href="">My profile</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="">logout</a></li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <ul>
                <br>
                <p class="h5" style="margin-left: 25px; text-transform: uppercase; font-style: italic;"><i class="flaticon-healthcare" aria-hidden="true" style="padding-right: 15px;"></i>E-Health care</p>
                <br>
                <li><a href=""><i class="fa fa-desktop" aria-hidden="true" style="padding-right: 15px;"></i><span>Dashboard</span></a></li>
                <li><a href=""><i class="fa fa-user" aria-hidden="true" style="padding-right: 15px;"></i><span>Add User</span></a></li>
                <li><a href=""><i class="fa fa-users" aria-hidden="true" style="padding-right: 15px;"></i><span>View User list</span></a></li>
                <li><a href=""><i class="
                    flaticon-review" aria-hidden="true"  style="padding-right: 15px;"></i><span>View Doctor review</span></a></li>
                <li><a href=""><i class="fa fa-credit-card" aria-hidden="true" style="padding-right: 15px;"></i><span>Transaction history</span></a></li>
                <li><a href=""><i class="fa fa-flag" aria-hidden="true"  style="padding-right: 15px;"></i><span>User Report</span></a></li>
            </ul>
        </div>
        
        <div class="content">
            <div class="container"style="margin-left: 70px; max-width: 1000px;">
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
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-warning" href="">Block</a>
                            <a class="btn btn-danger" href="">delete</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>mary@example.com</td>
                          <td>Doctor</td>
                          <td>
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-warning" href="">Block</a>
                            <a class="btn btn-danger" href="">delete</a>
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