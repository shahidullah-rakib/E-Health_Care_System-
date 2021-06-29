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
          <h2 class="">Aprove apiroment</h2>
          <br><br>

        
        <form action="" method="">
          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>

          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>

          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>

          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>

          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>

          <div class="col-4">
            <b>Patient Name : </b> Rakib <br>
            <b>Set Time  </><input type="text" name="vat" value=""> <br><br>
            <input type="submit" name="submit" value="Aprove" class="btn-secondary">
            <input type="submit" name="submit" value="Reject" class="btn-denger">
          </div>                               
        </form>
        
          
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
