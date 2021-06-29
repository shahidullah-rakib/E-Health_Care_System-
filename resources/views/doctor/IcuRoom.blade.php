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
            <div class="col-4 text-center">
                <h1>  <a href="{{route('icuRoom', ['id' => $user->id])}}">ICU</a> </h1> <br/>
                Room
            </div>

            <div class="col-4 text-center">
                <h1><a href="{{route('emergencyRoom', ['id' => $user->id])}}">Emergency </a></h1> <br/>
                Room
            </div>
            <br><br>
            <b>____________________________________Intensive Care Unit (ICU) ____________________________________</>
            <table class="">
                    <tr>
                        <td rowspan=100 align="center">
                         <form action="">
                         <table>
                          <tr>
                            <th>Room No.</th> 
                            <td><input type="text" name="vat" value=""></td>
                            
                          </tr>
                          <tr>
                           <th>Patient Name</th> 
                           <td><input type="text" name="vat" value=""></td>
                          </tr>
                          <tr>
                           <th>Room Status: </th> 
                           <td>
                              <input type="radio" id="" name="room" value="available">Available <br> <br>
                              <input type="radio" id="" name="room" value="booked">Booked
                            </td>
                          </tr>
                          <tr>
                            <td><input type="submit" name="submit" value="Book" class="btn-secondary"></td>
                          </tr>

                         </table>
                         
                         </form>
                       </td>
                    </tr>
                    
                    <tr>
                        <th>Room No. </th>
                        <th>Status</th>
                        <th>Patient Name</th>
                    </tr>
                   
                    @foreach ($ICU as $ICU)
                      <tr>
                        <td>{{$ICU->roonNo}}</td>
                        <td>{{$ICU->status}}</td>
                        <td>{{$ICU->patientName}}</td>
                        
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
