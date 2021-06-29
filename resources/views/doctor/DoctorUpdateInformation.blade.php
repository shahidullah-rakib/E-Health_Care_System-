<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styling -->
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->

    <!-- Admin Styling -->
    <link rel="stylesheet" href="/css/doctor-nav.css" />
    <link rel="stylesheet" href="/css/doctor-table.css" />
    <link rel="stylesheet" href="/css/doctor.css" />

    <title>Dashboard</title>
    <link rel="icon" href="../images/hms.svg">
  </head>

  <body>
    <header class="header-area">
      <div class="title">
      <a href="{{route('dashBoard')}}"><h1>E-Health Care</h1></a>
      </div>
      <div class="navigation">
        <nav class="menu" align="right">
              <a href="{{route('logout')}}">Logout</a>
        </nav>
      </div>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="{{route('doctorProfile')}}">Profile</a></li>
          <li><a href="{{route('immediateTreatment')}}">Immediate Treatment</a></li>
          <li><a href="{{route('patientDetails')}}">Patient Details</a></li>
          <li><a href="{{route('approveAppointment')}}">Approve Apointment</a></li>
          <li><a href="{{route('apointmentHistory')}}">Apointment History</a></li>
          <li><a href="{{route('operationTheatres')}}">Operation Theatres</a></li>
          <li><a href="{{route('hospitalAuthority')}}">Hospital Authority</a></li>
          <li><a href="{{route('feedbackReview')}}">Feedback & Review</a></li>
          <li><a href="{{route('help')}}">Help</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
        <h1>Change Password</h1>
        <br><br>
        <form action="" enctype="multipart/form-data" method="post">
            <table class="tbl-50">
                <tr>
                    <td>Full Name: </td>
                    <td> <input type="text" name="name" id="" value=""></td>
                </tr>
                
                <tr>
                    <td>Date Of Birth: </td>
                    <td> <input type="date" name="dob" id="" value=""></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td> 
                        <input type="text" name="gender" value="" class="input-responsive" required>
                    </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td> <input type="tel" name="phonenumber" id="" value=""></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" id="" value=""></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td> <input type="text" name="address" id="" value=""></td>
                </tr>

                <tr>
                    <td>Profile Picture: </td>
                    <td> <input type="file" name="profilePicture" value=""></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" ">
                        <input type="submit" name="submit" value=" Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
