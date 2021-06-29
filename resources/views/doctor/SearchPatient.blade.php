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
        <a href="{{route('dashBoard', ['id' => $user->id])}}"><h1>E-Health Care</h1></a>
      </div>
      <div class="navigation">
        <nav class="menu" align="right">
          <a href="{{route('doctorProfile', ['id' => $user->id])}}">Welcome {{$user->name}}</a>
              <a href="{{route('doctor.logout')}}">Logout</a>
        </nav>
      </div>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="{{route('doctorProfile', ['id' => $user->id])}}">Profile</a></li>
          <li><a href="{{route('immediateTreatment', ['id' => $user->id])}}">Immediate Treatment</a></li>
          <li><a href="{{route('patientDetails', ['id' => $user->id])}}">Patient Details</a></li>
          <li><a href="{{route('approveAppointment', ['id' => $user->id])}}">Approve Apointment</a></li>
          <li><a href="{{route('apointmentHistory', ['id' => $user->id])}}">Apointment History</a></li>
          <li><a href="{{route('operationTheatres', ['id' => $user->id])}}">Operation Theatres</a></li>
          <li><a href="{{route('hospitalAuthority', ['id' => $user->id])}}">Hospital Authority</a></li>
          <li><a href="{{route('help', ['id' => $user->id])}}">Doctor Information</a></li>
          <li><a href="{{route('feedbackReview', ['id' => $user->id])}}">Feedback & Review</a></li>
          
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="">Search Result </h2>
          <form  class="text-center" method="post">
                <input type="text" name="" class="search" placeholder="Search By Name" name="search">
                <a href="" class="btn">Search</a>      
          </form>
          <br><br>
          <table>
          <tr>
              <th>ID no.</th>
              <th>Name </th>
              <th>Blood Group </th>
              <th>Phone </th>
              <th>Email </th>
              <th>Address </th>
              <th>Profile Picture </th>
              
		        </tr>

            @foreach ($patient as $patient)
              <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->username}}</td>
                <td>{{$patient->bloodGroup}}</td>
                <td>{{$patient->phone}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->address}}</td>
                <td> <img src='' height='100' width='100'>   </td>
                
              </tr>
                
            @endforeach
            
          
          </table>
        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
