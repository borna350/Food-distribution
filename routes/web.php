<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//project route

Route::get('/index', 'ProjectController@index');
Route::get('/about', 'ProjectController@about');
Route::get('/contact', 'ProjectController@contact');
Route::get('/donatenow', 'ProjectController@donatenow');
Route::get('/volunteer', 'ProjectController@volunteer');
Route::get('/donatenow', 'donorController@store');
Route::post('/donatenow', 'donorController@donateFood');
Route::get('/volunteer', 'volunteerController@store1');
Route::post('/volunteer', 'volunteerController@apply');
Route::get('/contact', 'ContactController@store2');
Route::post('/contact', 'ContactController@contactus');

//admin route


Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/view&{id}', 'ContactController@seenbox');
Route::get('/admin/inbox', 'ContactController@showInbox');
Route::get('/admin/view1&{id}', 'donorController@seenbox1');
Route::get('/admin/donorInbox', 'donorController@showInbox1');
Route::get('/admin/view2&{id}', 'volunteerController@seenbox2');
Route::get('/admin/volunteerInbox', 'volunteerController@showInbox2');
Route::get('/admin/donorlist', 'AdminController@donorlist');
Route::get('/admin/volunteerlist', 'AdminController@volunteerlist');
Route::get('/admin/donorlist', 'donorController@donorinfoshow');
Route::get('/admin/volunteerlist', 'volunteerController@volunteerinfoshow');
