<?php

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
   // return view('msg')->with('error',false)->with('message',"SEE YOU NEXT YEAR");
});


/*Route::get('/chu_login',function(){
	return view('welcome');
});*/

////////////////SATYAM/////////////////////////////////////////////////////////

	 
Route::get('student_dash','StudentController@dash');
Route::get('paid_rep','StudentController@paid_rep');
Route::get('grp_rep','StudentController@grp_rep');
Route::post('ind_reg','StudentController@ind_reg');
Route::get('ind_reg','StudentController@ind_reg');
Route::post('grp_reg','StudentController@grp_reg');
Route::get('home', 'HomeController@index')->name('home');
Route::get('getIndName','AjaxController@getName');

Route::get('getTeam','AjaxController@getTeam');
Route::get('my_events','StudentController@my_events');
Route::post('addIndMembers','StudentController@addIndMembers');
Route::post('pay_amount','StudentController@pay_amount');
Route::post('repayment','StudentController@repayment');
Route::post('complete', 'StudentController@complete');
Route::post('pgRedirect', 'StudentController@pg_redirect');
Route::get('confirm','StudentController@confirm_payment');
Route::get('confirm2','StudentController@confirm_payment2');
Route::get('check','StudentController@check');

Route::get('core_comittee','UtilityController@core_comittee');
Route::get('coming_soon','StudentController@coming_soon');
Route::get('not_found','StudentController@not_found');
Route::get('contact_us','UtilityController@contact_us');
Route::get('redirect','StudentController@redirect');
Route::post('wait','StudentController@wait');


///////////////////////SOORAJ?//////////////////////////////////////////////



Route::get('/encrypt','HomeController@encrypt');
Auth::routes();

	Route::get('/groupRegistration','HomeController@groupRegistration');
	Route::post('/groupRegistrationSuccess','HomeController@groupRegistrationSuccess');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/login1','HomeController@login');
	Route::get('/enrolledEvents','HomeController@myEvents');
	Route::get('/dash','HomeController@dash');
	Route::post('/grp_reg','HomeController@grp_reg');
	Route::get('getName','HomeController@getName');
	Route::get('/paidStudentReport','TanyaController@individualEvents');
	Route::get('/registeredStudentReport','TanyaController@registeredStudents');
	Route::post('/groupEventDetails','TanyaController@groupEventDetails');
	Route::post('/individualEventDetails','TanyaController@individualEventDetails');


	////////////////////SHREY///////////////////////////////////

	
	Route::get('/addCaptain','adminController@addTeamCaptain');
Route::post('/submit','adminController@submit');
Route::get('/getCaptainName','adminController@getCaptainName');
Route::get('/showStudentCommitee','commiteeController@studentCommittee');
Route::get('/getApex','commiteeController@getStudentApex');
Route::get('/getCoordinator','commiteeController@getStudentCoordinator');
Route::post('/addCommitteMembers','commiteeController@addApexCoordinator');
Route::post('/removeApexCoordinater','commiteeController@removeCommitteMember');
