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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/dashboard','homeController@index');
//Route::get('/','homeController@index');

//Patient routes

Route::get('/PatientSignup','PatientController@PatientControllerIndex');
Route::post('submit','PatientController@insertPatient');
Route::get('/PatientUpdatePage','PatientController@PatientControllerUpdateIndex');
Route::post('update','PatientController@updatePatient');
Route::get('/PatientDeletePage','PatientController@PatientControllerDeleteIndex');
Route::post('delete','PatientController@deletePatient');
Route::get('/ChangePasswordPage','PatientController@PatientChangePasswordIndex');
Route::get('/searchDoctor','PatientController@PatientSearchDoctorIndex');
