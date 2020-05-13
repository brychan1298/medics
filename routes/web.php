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

Route::get('/shop', function () {
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

// Route::get('/Acheck', function () {
//     return view('admin.checkpayment');
// });

// Route::get('/Acustomer', function () {
//     return view('admin.customer');
// });

Route::group(['middleware' => ['auth', 'cekAdmin']], function () {
    Route::get('/Aqueue', 'AqueueController@index');
});

Route::post('/login','Auth\LoginController@login')->middleware('cekAdmin');

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

	Route::resource('/Acheck','AcheckController');

	
// QUEUE
	// Route::resource('/Aqueue','AqueueController');
    //Route::get('/Aqueue','AqueueController@index');

//submit
    Route::post('/Aqueuesubmit', 'AqueueController@store');

//ADMIN CHECK PAYMENT
	Route::resource('/Acheck','AcheckController');

	Route::get('/cekproses/update/{id}','AcheckController@update');
	Route::get('/batal/{id}','AcheckController@batal');
	Route::get('/Acheckproses',function(){
		return view('admin.detailcustomer');
	});
	Route::get('/delTran/{id}','AcheckController@delTran');


//ADMIN CUSTOMER
	Route::resource('/Acustomer','AcustomerController');
	Route::get('/admindetailcustomer',function(){
		return view('admin.detailcustomer');
	});
	Route::get('/customer/detil/{id}','AcustomerController@edit');
	Route::get('/showcustomer','AcustomerController@show');

	Route::get('/tampilanTv',function(){
		return view('admin.tampilanRS');
	});

//ADMIN PATIENT
	Route::get('/Apatient', function () {
    	return view('admin.ourpatient');	
	});
	Route::get('/Apatient','AqueueController@showPatient');
























































































// USER USER USER USER USER USER USER USER
// USER USER USER USER USER USER USER USER
// USER USER USER USER USER USER USER USER
// USER USER USER USER USER USER USER USER

Route::group(['middleware' => ['auth']], function(){
	Route::get('/addCart','CartController@store');	
});

Route::get('/', function () {
    	return view('homepage');
	});

Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route::get('/shop', function () {
//     return view('shop');
// });

// Route::get('/doctor', function () {
//     return view('consult');
// });

// Route::get('/hospital', function () {
//     return view('hospital');
// });

Route::get('/login', function () {
    return view('login');
});

// Route::get('/shop', function () {
//     return view('shop');
// });

Route::get('/doctorqueue', function () {
    return view('doctor');
});

Route::get('/hospitalback', function () {
    return view('hospital');
});

// USER PROFILE
	Route::get('/profile/{id}','ProfileController@index');
	Route::get('/editprofile/{id}','ProfileController@update');


// USER SHOP
	Route::resource('/shop','ShopController');
	Route::get('/shopSearch','ShopController@cari');
	Route::get('/cart/{id}','CartController@index2');
	Route::get('/cartDel/{id}/{iduser}','CartController@destroy');
	Route::get('/checkout/{iduser}','CartController@index3');
	Route::get('/bayar/{iduser}','CartController@bayar');
	Route::get('/buyHis/{id}','CartController@index4');
	Route::get('/proof/{id}','CartController@index5');
	Route::get('/uploadProof/{id}','CartController@update2');

//USER CONSULT
	Route::resource('/doctor','DoctorController');
	Route::get('/consultSearch','DoctorController@cari');
	Route::get('/dashboard/{iddokter}/{iduser}',[
		'uses' => 'ChatController@getDashboard',
		'as' => 'dashboard',
		'middleware' => 'auth'
	]);

	Route::post('/createpost',[
		'uses' => 'ChatController@postSavedChat',
		'as' => 'post.create',
		'middleware' => 'auth'
	]);


//USER HOSPITAL
	Route::resource('/hospital','HospitalController');
	Route::get('/UhosSearch','HospitalController@cari');

	Route::get('/doctorqueue','DoctorController@index2');
	Route::get('/UdocSearch','DoctorController@cari2');
	Route::get('/choosedoctor/{id}','HospitalController@index2');
	Route::get('/choosehospital/{id}','HospitalController@index3');
	Route::get('/ff',function(){
		return view('successQueue');
	});
	Route::get('/booking/{iddokter}/{idhospital}','HospitalController@index4');
	Route::get('/insertpatient/{iduser}','AqueueController@insert');
	Route::get('/thisMe/{iddokter}/{idhospital}/{iduser}','HospitalController@index5');
	Route::get('/detaildoctor/{id}','HospitalController@detaildoctor');
	Route::get('/historyQueue/{id}','AqueueController@indexHistory');
	Route::get('/tampilanRS',function(){
		return view('tampilanRS');
	});
	Route::get('/tampilanRS/{idhospital}','AqueueController@index2');
	Route::get('/after',function(){
		return view('afterQueue');
	});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();






// DOCTOR
Route::get('/aqueuedoctor/{iddokter}','AqueueController@index3');
Route::get('/queuenote/{idpatient}/{iddokter}','AqueueController@note');

Route::get('/chatdoctor/{iddokter}','ChatController@ShowChatDoctor');
Route::get('/doctorDashboard/{iduser}/{iddokter}','ChatController@getDashboardDoctor');
Route::get('/saveChatDoctor','ChatController@saveChatDoctor');
Route::post('/createpostdoctor',[
		'uses' => 'ChatController@saveChatDoctor',
		'as' => 'post.createdoctor',
		'middleware' => 'auth'
	]);

Route::get('/chatdoctor', function () {
    return view('chatdoctor');
});

Route::get('/replydoctor', function () {
    return view('replydoctor');
});