<html>
<h1> Welcome-{{($user1->username)}},id-{{($user1->id)}} </h1>
<body>

<style>
body {
  background-color: green;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  font-size: 45px;
}
</style>



<a href='/PatientUpdatePage'> Update your account information </a>
<br>
<a href='/ViewDoctorInfoPage'> View doctor information </a>
<br>
<a href='/searchDoctor'> Search Doctor </a>
<br>
<a href='/PatientAppoinment'> Make Appoinment with doctor </a>
<br>
<a href='/ContactDoctorPatient'>Contact With doctor</a>
<br>
<a href='/CheckRoomView'>Check Room Information</a>
<br>
<a href='/PatientDoctorReview'>Review Doctor</a>
<br>
<a href='/PatientClinicReview'>Review Clinic</a>
<br>
<a href='/PatientLogout'>Log Out</a>

</body>
</html>