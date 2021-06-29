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

Route::get('/', function () {
    return view('login');
});
//Route::get('/dashboard','homeController@index');
//Route::get('/','homeController@index')->name('logout');

Route::post('/login','loginController@index');
Route::get('/login','loginController@val');

Route::get('/logout', 'LogoutController@indexLogout');

Route::group( ['middleware'=> ['session'] ],function(){
    //doctor route
    Route::get('/doctorDashboard/{id}',['uses'=>'DoctorController@doctorDashboard'])->name('dashBoard');
//updateProfile
    Route::get('/doctor/doctorProfile/{id}','DoctorController@doctorProfile')->name('doctorProfile');
    //Route::post('/doctor/doctorProfile/{id}','DoctorController@updateProfile');

    Route::get('/doctor/patientDetails/{id}',['uses'=>'DoctorController@patientDetails'])->name('patientDetails');
//update
    Route::get('/doctor/approveAppointment/{id}',['uses'=>'DoctorController@approveAppointment'])->name('approveAppointment');
    Route::post('/doctor/approveAppointment/{id}',['uses'=>'DoctorController@update']);

//insert
    Route::get('/doctor/newApiroment/{id}',['uses'=>'DoctorController@newApiroment'])->name('newApiroment');
    Route::post('/doctor/newApiroment/{id}',['uses'=>'DoctorController@insertAppointment'])->name('newApiroment');

    //Route::get('/doctor/newApiroment/{id}',['uses'=>'DoctorController@newApiroment'])->name('newApiroment');  
    Route::get('/doctor/apointmentHistory/{id}',['uses'=>'DoctorController@apointmentHistory'])->name('apointmentHistory');
    Route::get('/doctor/OperationTheatres/{id}',['uses'=>'DoctorController@operationTheatres'])->name('operationTheatres');
    Route::get('/doctor/hospitalAuthority/{id}',['uses'=>'DoctorController@hospitalAuthority'])->name('hospitalAuthority');
    Route::get('/doctor/feedbackReview/{id}',['uses'=>'DoctorController@feedbackReview'])->name('feedbackReview');
    Route::get('/doctor/help/{id}',['uses'=>'DoctorController@help'])->name('help');
    Route::get('/doctor/icuRoom/{id}',['uses'=>'DoctorController@icuRoom'])->name('icuRoom');
    Route::get('/doctor/emergencyRoom/{id}',['uses'=>'DoctorController@emergencyRoom'])->name('emergencyRoom');
//change pass    
    Route::get('/doctor/doctorChangePass/{id}',['uses'=>'DoctorController@doctorChangePass'])->name('doctorChangePass');
    Route::post('/doctor/doctorChangePass/{id}','DoctorController@updatePassword');
//update Information
    Route::get('/doctor/doctorUpdateInformation/{id}',['uses'=>'DoctorController@doctorUpdateInformation'])->name('doctorUpdateInformation');

    Route::post('/doctor/doctorUpdateInformation/{id}','DoctorController@updateProfile');

    Route::get('/doctor/doctorCheckSalary/{id}',['uses'=>'DoctorController@doctorCheckSalary'])->name('doctorCheckSalary');

//insert
    Route::get('/doctor/immediateTreatment/{id}',['uses'=>'DoctorController@immediateTreatment'])->name('immediateTreatment');  
    Route::post('/doctor/immediateTreatment/{id}',['uses'=>'DoctorController@immediateTreatmentInsert'])->name('immediateTreatment');
    
    Route::get('/doctor/checkReport/{id}',['uses'=>'DoctorController@checkReport'])->name('checkReport');

    Route::get('/doctor/searchPatient/{id}',['uses'=>'DoctorController@searchPatient'])->name('searchPatient');
    Route::post('/doctor/searchPatient/{id}',['uses'=>'DoctorController@searchPatient'])->name('searchPatient');
} );






//recepsionest route
Route::get('/home','homeController@index')->name('doctor.logout');
Route::get('/reception/dashboard/{id}','receptionController@index');
Route::get('/reception/edit','receptionController@edit');
Route::get('/reception/docSche','receptionController@schedule');
Route::get('/reception/chngpass','receptionController@chngPass');
Route::get('/reception/conadmin','receptionController@conAdmin');
Route::get('/reception/condoctor','receptionController@conDoctor');
Route::get('/reception/conpatient','receptionController@conPatient');
Route::get('/reception/patientsbill','receptionController@patientsBill');
Route::get('/reception/rooms','receptionController@Rooms');
Route::get('/reception/emergency','receptionController@Emergency');
Route::get('/reception/discount','receptionController@Discount');
Route::get('/reception/searchdoctor','receptionController@searchDoctor');

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
