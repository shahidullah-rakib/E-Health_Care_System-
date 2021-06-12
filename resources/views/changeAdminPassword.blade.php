<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>change Password</title>
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
        <div class="content" style="background-color:#fafafa">
            <div class="changePassword">
                <h1 style="font-weight: normal;font-size: 1.4rem; margin-bottom: 40px;">Change Password</h1>
                <form onsubmit="return passwordVlidation()" method="POST" action="../controller/changePassword.php?id=<?php echo $id; ?>">
    
                    <input type="password" name="currentPass" id="currentPass" placeholder="Current Password.."><br>
                    <label id="lcurrent" style="color: red;font-size: .8rem;"></label><br>
    
                    <input type="password" name="newPassword" id="newPass" placeholder="New Password.."><br>
                    <label id="lnew" style="color: red;font-size: .8rem;"></label><br>
                    <input type="password" name="retypePassword" id="retypePass" placeholder="Retype new.."><br>
    
                    <label id="lretype" style="color: red;font-size: .8rem;"></label><br>
                    <div id="password-container" style="padding: 20px 0px;">
                        <input id="button" type="submit" name="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
        
    </div>


<script src="admin.js"></script>

</body>
</html>