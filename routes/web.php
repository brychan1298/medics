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
    return view('welcome');
});

Route::get('/shopee', function () {
    return view('shop');
});

// Route::get('/Aqueue', function () {
//     return view('admin.adminpatient');
// });

// Route::get('/Adoctor', function () {
//      return view('admin.admindatadoctor');
// });

// Route::get('/Amedicine', function () {
//     return view('admin.admindatamedicine');
// });

// Route::get('/Ahospital', function () {
//     return view('admin.admindatahospital');
// });

Route::get('/Acheck', function () {
    return view('admin.checkpayment');
});

Route::get('/Acustomer', function () {
    return view('admin.customer');
});

Route::get('/Apatient', function () {
    return view('admin.ourpatient');
});

//ADMIN DOKTER
	Route::resource('/Adoctor','AdoctorController');
	Route::get('/tambahdokter',function () {
		return view('admin.admindoctor');
	});
	Route::post('/doctor/submit','AdoctorController@store');
	Route::get('/doctor/edit/{id}','AdoctorController@edit');
	Route::get('/doctor/delete/{id}','AdoctorController@destroy');
	Route::post('/doctor/update','AdoctorController@update');

//ADMIN MEDICINE
	Route::resource('/Amedicine','AmedicineController');
	Route::get('/tambahmedicine',function () {
		return view('admin.adminmedicine');
	});
	Route::post('/medicine/submit','AmedicineController@store');
	Route::get('/medicine/edit/{id}','AmedicineController@edit');
	Route::post('/medicine/update','AmedicineController@update');

// search
Route::get('/medicineSearch','AmedicineController@cari');
Route::get('/doctorSearch','AdoctorController@cari');
Route::get('/hospitalSearch','AhospitalController@cari');


//ADMIN HOSPITAL
	Route::resource('/Ahospital','AhospitalController');
	Route::get('/tambahhospital',function(){
		return view('admin.adminhospital');
	});
	Route::post('/hospital/submit','AhospitalController@store');
	Route::get('/hospital/edit/{id}','AhospitalController@edit');
	Route::get('/hospital/delete/{id}','AhospitalController@destroy');
	Route::post('/hospital/update','AhospitalController@update');

