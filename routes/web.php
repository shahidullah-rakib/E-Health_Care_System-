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

//login

Route::get( '/login', "LoginController@index" )->name( 'login' );
Route::post( '/login', "LoginController@verify" );
Route::get( '/logout', 'LogoutController@logout' )->name( 'logout' );
Route::get( '/home', 'homeController@index' )->name( 'home' );

Route::group( ['middleware' => ['sess']], function () {
    //doctor route
    Route::get( '/doctorDashboard', ['uses' => 'DoctorController@doctorDashboard'] )->name( 'dashBoard' );
    Route::get( '/doctorProfile', ['uses' => 'DoctorController@doctorProfile'] )->name( 'doctorProfile' );
    Route::get( '/patientDetails', ['uses' => 'DoctorController@patientDetails'] )->name( 'patientDetails' );
    Route::get( '/approveAppointment', ['uses' => 'DoctorController@approveAppointment'] )->name( 'approveAppointment' );
    Route::get( '/apointmentHistory', ['uses' => 'DoctorController@apointmentHistory'] )->name( 'apointmentHistory' );
    Route::get( '/OperationTheatres', ['uses' => 'DoctorController@operationTheatres'] )->name( 'operationTheatres' );
    Route::get( '/hospitalAuthority', ['uses' => 'DoctorController@hospitalAuthority'] )->name( 'hospitalAuthority' );
    Route::get( '/feedbackReview', ['uses' => 'DoctorController@feedbackReview'] )->name( 'feedbackReview' );
    Route::get( '/help', ['uses' => 'DoctorController@help'] )->name( 'help' );
    Route::get( '/icuRoom', ['uses' => 'DoctorController@icuRoom'] )->name( 'icuRoom' );
    Route::get( '/emergencyRoom', ['uses' => 'DoctorController@emergencyRoom'] )->name( 'emergencyRoom' );
    Route::get( '/doctorChangePass', ['uses' => 'DoctorController@doctorChangePass'] )->name( 'doctorChangePass' );
    Route::get( '/doctorUpdateInformation', ['uses' => 'DoctorController@doctorUpdateInformation'] )->name( 'doctorUpdateInformation' );
    Route::get( '/doctorCheckSalary', ['uses' => 'DoctorController@doctorCheckSalary'] )->name( 'doctorCheckSalary' );
    Route::get( '/immediateTreatment', ['uses' => 'DoctorController@immediateTreatment'] )->name( 'immediateTreatment' );

    //recepsionest route
    Route::get( '/reception/dashboard', 'receptionController@index' );
    Route::get( '/reception/edit', 'receptionController@edit' );
    Route::get( '/reception/docSche', 'receptionController@schedule' );
    Route::get( '/reception/chngpass', 'receptionController@chngPass' );
    Route::get( '/reception/conadmin', 'receptionController@conAdmin' );
    Route::get( '/reception/condoctor', 'receptionController@conDoctor' );
    Route::get( '/reception/conpatient', 'receptionController@conPatient' );
    Route::get( '/reception/patientsbill', 'receptionController@patientsBill' );
    Route::get( '/reception/rooms', 'receptionController@Rooms' );
    Route::get( '/reception/emergency', 'receptionController@Emergency' );
    Route::get( '/reception/discount', 'receptionController@Discount' );
    Route::get( '/reception/searchdoctor', 'receptionController@searchDoctor' );

    //admin session
    Route::group( ['middleware' => ['adminSess']], function () {
        Route::get( '/admin/dashboard', 'adminController@dashboard' )->name( 'admin.dashboard' );
        Route::get( '/admin/addUser', 'UserControllerByAdmin@index' )->name( 'user.index' );
        Route::post( '/admin/addUser', 'UserControllerByAdmin@addUser' )->name( 'user.addUser' );
        Route::get( '/admin/changePassword', 'adminController@changePassword' )->name( 'admin.changePassword' );
        Route::post( '/admin/changePassword', 'adminController@changePasswordVerify' )->name( 'admin.changePasswordVerify' );
        Route::get( '/admin/viewUserList', 'UserControllerByAdmin@viewUserList' )->name( 'user.viewUserList' );
        Route::get( 'admin/viewUserList/search', 'UserControllerByAdmin@liveSearch' )->name( 'user.search' );
        Route::get( '/admin/myProfile', 'adminController@myProfile' )->name( 'admin.myProfile' );
        Route::post( '/admin/myProfile', 'adminController@myProfileVerify' )->name( 'admin.myProfileVerify' );
        Route::get( '/admin/doctorReview', 'UserControllerByAdmin@doctorReview' )->name( 'user.doctorReview' );
        Route::get( '/admin/transactionHistory', 'UserControllerByAdmin@transactionHistory' )->name( 'user.transactionHistory' );
        Route::get( '/admin/userReport', 'UserControllerByAdmin@userReport' )->name( 'user.userReport' );
        Route::get( '/admin/userReport/{id}', 'UserControllerByAdmin@userReportStatus' )->name( 'user.userReportStatus' );
        Route::get( '/admin/editUser/{id}', 'UserControllerByAdmin@editUserView' )->name( 'user.editUserView' );
        Route::post( '/admin/editUser/{id}', 'UserControllerByAdmin@editUser' )->name( 'user.editUser' );
        Route::get( '/admin/patinetRoom', 'RoomController@roomView' )->name( 'room.roomView' );
        Route::get( "/admin/roomBookView/{id}", 'RoomController@roomBookView' )->name( 'room.roomBookView' );
        Route::post( "/admin/roomBookView/{id}", 'RoomController@roomBookVerify' )->name( 'room.roomBookVerify' );
        Route::get( '/admin/viewDetails/{id}', "UserControllerByAdmin@viewUserDetails" )->name( 'user.viewUserDetails' );
        Route::get( '/admin/delete/{id}', "UserControllerByAdmin@deleteUser" )->name( 'user.deleteUser' );
        Route::get( '/admin/block/{id}', "UserControllerByAdmin@blockUser" )->name( 'user.blockUser' );
        Route::get( '/admin/manageSalary', 'UserControllerByAdmin@manageSalaryIndex' )->name( 'user.manageSalaryIndex' );
        Route::post( '/admin/manageSalary', 'UserControllerByAdmin@manageSalary' )->name( 'user.manageSalary' );
        Route::get( '/admin/workSchedul', "UserControllerByAdmin@workSchedulIndex" )->name( 'user.workSchedulIndex' );
        Route::get( '/admin/workSchedul/{id}', "UserControllerByAdmin@workSchedul" )->name( 'user.workSchedul' );
        Route::post( '/admin/image', 'adminController@profilePicture' );
        Route::get( '/admin/updateSalary/{id}', "UserControllerByAdmin@updateSalaryIndex" )->name( 'user.updateSalaryIndex' );
        Route::post( '/admin/updateSalary/{id}', "UserControllerByAdmin@updateSalaryVerify" )->name( 'user.updateSalaryVerify' );
    } );

    //patient route
    Route::get( '/PatientSignup', ['uses' => 'PatientProfileController@PatientSignUpIndex'] );
    Route::get( '/PatientDoctor', ['uses' => 'PatientProfileController@PatientDoctorPageIndex'] );
    Route::get( '/PatientDoctorInfo', ['uses' => 'PatientProfileController@PatientDoctorInfoIndex'] );
    Route::get( '/PatientDoctorContact', ['uses' => 'PatientProfileController@PatientDoctorContactIndex'] );
    Route::get( '/PatientDoctorReview', ['uses' => 'PatientProfileController@PatientDoctorReviewIndex'] );

    //Route::get('/doctorDashboard', [DoctorController::class,'doctorDashboard']);

    //Route::get('/doctor/approveAppointment',[DoctorController::class,'approveAppointment'])->name('doctorPage');

} );