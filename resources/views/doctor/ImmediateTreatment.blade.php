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
          <h2 class=""> Immediate Treatment</h2>
          <br><br>
           <table class="">
                    <tr>
                        <td rowspan=8 align="center">
                         <form action="" class="form-container">
                         <table>
                           <tr rowspan="2" align="center"><h2><u> Chat With Patient</u></h2></tr>
                          <tr>
                            <th>Patient Name</th> 
                            <td></td>
                            
                          </tr>
                          <tr>
                           <th><label for="msg"><b>Message</b></label></th> 
                           <td></td>
                          </tr>
                          <tr>
                            <td><textarea placeholder="Type message.." name="msg" required></textarea></td>
                          </tr>
                          <tr>
                            <td><button type="submit" class="btn">Replay</button></td>
                            <td><button type="button" class="btn cancel" onclick="">Close</button></td>
                          </tr>

                         </table>
                         
                         </form>
                       </td>
                    </tr>
                    <td>
                      
                    <form action="" class="form-container-2">
                      <table>
                        <tr rowspan="8" align="center"><h2><u> Doctor Prescribe</u></h2> </tr>
                      <tr>
                        <th>
                          Name: <input type="text" name="" id="" class="" placeholder=""><br><br>
                          Disease: <input type="text" name="" id="" class="" placeholder="">
                        </th>
                        <th>
                          Age: <input type="text" name="" id="" class="" placeholder=""><br><br>
                          Blood Group: <input type="text" name="" id="" class="" placeholder="">
                        </th>

                      </tr>
                   
                      <tr>
                        <td><textarea placeholder="Suggest prescription.." name="msg" ></textarea> </td>
                        <td><textarea placeholder="Suggest tests.." name="msg" ></textarea></td>
                      </tr>

                      <tr>
                        <td>
                          <button type="submit" class="btn">Submit</button>
                         
                        </td>
                        <td> <button type="reset" class="btn cancel" onclick="">Reset</button></td>
                      </tr>
                      </table>
                    </form>
                    </table>

                    </td>
                    
                    
                    
                </table>


        </div>
      </div>
      <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
  </body>
</html>
