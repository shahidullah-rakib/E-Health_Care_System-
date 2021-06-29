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
    <link rel="stylesheet" href="/css/doctor.css" />
    <link rel="stylesheet" href="/css/doctor-table.css" />

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
      <h1>INFORMATION</h1>
        <br/><br/>
          <form action="">
            <table class="tbl-80">
                    <tr>
                        <td>Name </td>
                        <td>: Shahidullah Rakib </td>
                        <td rowspan=8 align="center">
                        <img src="#" height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    
                    <tr>
                        <td>Qualifications </td>
                        <td>:  BMBS, BM, MBChB Dhaka Medical</td>
                    </tr>
                   
                    <tr>
                        <td>Gender </td>
                        <td>: Male</td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: a@gmail.com</td>
                    </tr>
                  
                    <tr>
                        <td>Phone </td>
                        <td>: 01712125684</td>
                    </tr>
                    
                    <tr>
                        <td>Address </td>
                        <td>: a,b,c</td>
                    </tr>
                   
                    <tr>
                        <td>Date of Birth </td>
                        <td>: 1999.25.4</td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>
                        <a href="{{route('doctorChangePass')}}" class="btn-secondary">Change Password</a>
                        <a href="{{route('doctorUpdateInformation')}}" class="btn-secondary">Update Information</a>  <br><br>
                        <a href="{{route('doctorCheckSalary')}}" class="btn-secondary">Check Salary</a>                       
                        </td>
                    </tr>
                    
                </table>
           </form>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
