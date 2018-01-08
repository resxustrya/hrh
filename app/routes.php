<?php

Route::any('/', 'AdminController@index');

Route::get('logout', function(){
	Auth::logout();
	Session::flush();
	return Redirect::to('/');
});


//Route::get('login', array('before' => 'old', 'uses' => 'LoginController@login'));

Route::get('home', function(){
	return Redirect::to('index');
});
Route::get('index',array('before' => 'auth','uses' => 'AdminController@home'));

//HRH
Route::get('profile','hrhController@profile');
Route::get('profile/{userid}','hrhController@profile');
Route::get('hrhInfo/{userid}','hrhController@hrhInfo');
Route::get('hrhQuery/{provinceid}','hrhController@hrhQuery');
Route::get('hrhAppend/{provinceid}/{municipalityid}','MunicipalityController@hrhAppend');
Route::get('hrhTypeForm','HrhController@hrhTypeForm');
Route::post("updateUser",'hrhController@updateUser');
Route::match(array('GET','POST'),'username_trapping','HrhController@username_trapping');
Route::post('/uploadPicture','HrhController@uploadPicture');

Route::post('sign_up','hrhController@sign_up');

Route::get('test',function(){
   return \Carbon\Carbon::now();
});

Route::match(array('GET','POST'),'EducationalBackground','hrhController@educationalBackground');
Route::match(array('GET','POST'),'hrhList','hrhController@hrhList');
Route::match(array('GET','POST'),'mList','MunicipalityController@mList');
Route::match(array('GET','POST'),'mForm','MunicipalityController@mForm');
Route::match(array('GET','POST'),'updateProvince','ProvinceController@updateProvince');
//PROVINCE
Route::match(array('GET','POST'),'pList','ProvinceController@pList');
Route::match(array('GET','POST'),'pForm','ProvinceController@pForm');
Route::match(array('GET','POST'),'addProvince','ProvinceController@addProvince');
Route::post('deleteProvince','ProvinceController@deleteProvince');

//HRHtype
Route::match(['GET','POST'],'hrhType','hrhController@hrhTypeView');
Route::match(array('GET','POST'),'addHrhType','hrhController@addHrhType');
Route::post('updateHrhType','HrhController@updateHrhType');
Route::post('deleteHrhType','HrhController@deleteHrhType');

//MUNICIPALITY
Route::post('mUpdate','MunicipalityController@mUpdate');
Route::post('mAdd','MunicipalityController@mAdd');
Route::post('mDelete','MunicipalityController@mDelete');
Route::get('municipalityQuery/{provinceid}','MunicipalityController@municipalityQuery');
Route::get('municipalityQuery','MunicipalityController@municipalityQuery');

//STATUS
Route::match(array('GET','POST'),'sList','StatusController@sList');
Route::get('statusForm','StatusController@statusForm');
Route::post('statusUpdate','StatusController@statusUpdate');
Route::post('statusDelete','StatusController@statusDelete');

//REGISTER
Route::match(['GET','POST'],'/register','AdminController@register');

//CHILDREN
Route::post('updateChildren','hrhController@updateChildren');
//EDUCATIONAL BACKGROUND
Route::post('updateEducationalBackground','hrhController@updateEducationalBackground');
//SERVICE ELIGIBILITY
Route::post('updateService','hrhController@updateService');
//WORK EXPERIENCE
Route::post('updateWork','hrhController@updateWork');

//EXCEL
Route::match(['GET','POST'],'exportExcel','AdminController@exportExcel');
Route::match(['GET','POST'],'exportHrh','AdminController@exportHrh');

