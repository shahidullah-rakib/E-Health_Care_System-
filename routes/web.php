<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/','homeController@index');
Route::get('/login/user', function () {
    return view('login');
});
//Route::get('/','homeController@index')->name('logout');

Route::post('/login','loginController@index');
Route::get('/login','loginController@val');
Route::get('/login','loginController@index');


//doctor route
Route::get('/doctorDashboard',['uses'=>'DoctorController@doctorDashboard'])->name('dashBoard');
Route::get('/doctorProfile',['uses'=>'DoctorController@doctorProfile'])->name('doctorProfile');
Route::get('/patientDetails',['uses'=>'DoctorController@patientDetails'])->name('patientDetails');
Route::get('/approveAppointment',['uses'=>'DoctorController@approveAppointment'])->name('approveAppointment');
Route::get('/apointmentHistory',['uses'=>'DoctorController@apointmentHistory'])->name('apointmentHistory');
Route::get('/OperationTheatres',['uses'=>'DoctorController@operationTheatres'])->name('operationTheatres');
Route::get('/hospitalAuthority',['uses'=>'DoctorController@hospitalAuthority'])->name('hospitalAuthority');
Route::get('/feedbackReview',['uses'=>'DoctorController@feedbackReview'])->name('feedbackReview');
Route::get('/help',['uses'=>'DoctorController@help'])->name('help');
Route::get('/icuRoom',['uses'=>'DoctorController@icuRoom'])->name('icuRoom');
Route::get('/emergencyRoom',['uses'=>'DoctorController@emergencyRoom'])->name('emergencyRoom');
Route::get('/doctorChangePass',['uses'=>'DoctorController@doctorChangePass'])->name('doctorChangePass');
Route::get('/doctorUpdateInformation',['uses'=>'DoctorController@doctorUpdateInformation'])->name('doctorUpdateInformation');
Route::get('/doctorCheckSalary',['uses'=>'DoctorController@doctorCheckSalary'])->name('doctorCheckSalary');
Route::get('/immediateTreatment',['uses'=>'DoctorController@immediateTreatment'])->name('immediateTreatment');

//recepsionest route
Route::get('/home','homeController@index')->name('logout');
Route::get('/reception/dashboard/{id}','receptionController@index');
Route::get('/reception/upp','receptionController@viewupp');
Route::post('/reception/upp','receptionController@upp');
Route::get('/reception/chatbox','receptionController@chat');
Route::get('/reception/edit/{id}','receptionController@edit')->middleware('edit');
Route::post('/reception/edit/{id}','receptionController@update')->middleware('edit');
Route::get('/reception/docSche','receptionController@schedule');
Route::get('/reception/chngpass/{id}','receptionController@chngPass')->middleware('pass');
Route::post('/reception/upass/{id}','receptionController@updatePass')->middleware('pass');
Route::get('/reception/conadmin','receptionController@conAdmin');
Route::get('/reception/condoctor','receptionController@conDoctor');
Route::get('/reception/conpatient','receptionController@conPatient');
Route::get('/reception/patientsbill','receptionController@patientsBill');
Route::get('/reception/createbill','receptionController@viewcreatebill');
Route::post('/reception/createbill','receptionController@createBill');
Route::get('/reception/rooms','receptionController@Rooms');
Route::get('/reception/search','receptionController@search');
Route::get('/reception/searchdoc','receptionController@viewsearchDoctor');
Route::post('/reception/searchdoc','receptionController@searchDoctor');
Route::get('/reception/searchpat','receptionController@viewsearchPatient');
Route::post('/reception/searchpat','receptionController@searchPatient');
Route::get('/reception/emergency','receptionController@Emergency');
Route::post('/reception/emergency','receptionController@upEmergency');
Route::get('/reception/discount','receptionController@viewDiscount');
Route::post('/reception/discount','receptionController@Discount');
Route::get('/reception/trans','receptionController@trans');
Route::get('/reception/logout','receptionController@logout');
Route::get('/reception/patinfo','receptionController@patInfo');
Route::get('/reception/withdraw','receptionController@withDraw');
Route::get('/reception/withdraw/ncc','receptionController@ncc');
Route::get('/reception/withdraw/bkash','receptionController@bkash');
Route::get('/reception/withdraw/dbbl','receptionController@dbbl');
Route::get('/reception/review','receptionController@review');




//admin route
Route::get('/dashboard','homeController@dashboard')->name('home.dashboard');
Route::get('/addUser','UserControllerByAdmin@index')->name('user.index');
Route::post('/addUser','UserControllerByAdmin@addUser')->name('user.addUser');
Route::get('/changePassword','adminController@changePassword')->name('admin.changePassword');
Route::get('/viewUserList','UserControllerByAdmin@viewUserList')->name('user.viewUserList');
Route::get('/myProfile','adminController@myProfile')->name('admin.myProfile');
Route::get('/doctorReview','UserControllerByAdmin@doctorReview')->name('user.doctorReview');
Route::get('/transactionHistory','UserControllerByAdmin@transactionHistory')->name('user.transactionHistory');
Route::get('userReport','UserControllerByAdmin@userReport')->name('user.userReport');
Route::get('/logout','homeController@logout')->name('logout');
Route::get('/editUser','UserControllerByAdmin@editUserView')->name('user.editUserView');
Route::get('/patinetRoom','RoomController@roomView')->name('room.roomView');
Route::get("/roomBookView",'RoomController@roomBookView')->name('room.roomBookView');
Route::get('/viewDetails',"UserControllerByAdmin@viewUserDetails")->name('user.viewUserDetails');

//patient route
Route::get('/PatientSignup', ['uses'=> 'PatientProfileController@PatientSignUpIndex']);
Route::get('/PatientDoctor', ['uses'=> 'PatientProfileController@PatientDoctorPageIndex']);
Route::get('/PatientDoctorInfo', ['uses'=> 'PatientProfileController@PatientDoctorInfoIndex']);
Route::get('/PatientDoctorContact', ['uses'=> 'PatientProfileController@PatientDoctorContactIndex']);
Route::get('/PatientDoctorReview', ['uses'=> 'PatientProfileController@PatientDoctorReviewIndex']);


//Route::get('/doctorDashboard', [DoctorController::class,'doctorDashboard']);

//Route::get('/doctor/approveAppointment',[DoctorController::class,'approveAppointment'])->name('doctorPage');
