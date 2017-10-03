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
});

Auth::routes();
Route::get('/account', function () {
    return view('account');
});

Route::get('/device/phone_tablet/register', function () {
    return view('device/phone.create');
});
// Route::get('/device/phone/view/{id}', function () {
//     return view('device/phone.view');
//});
Route::get('/device/laptop/register', function () {
    return view('device/laptop.create');
});
Route::get('/device/tv/register', function () {
    return view('device/tv.create');
});
Route::get('/device/vehicle/register', function () {
    return view('device/vehicle.create');
});
Route::get('/report/', function () {
    return view('report.index');
});
Route::get('/device/phone/register', 'DeviceController@create');
Route::resource('/device', 'DeviceController');

// Route::get('/device/searchstart', function () {
//     return view('device.search');
// });

Route::get('/device/phone/view/{id}', 'DeviceController@phoneview');
Route::get('/device/search/', 'DeviceController@searchstart');
Route::post('/device/search/{search}', 'DeviceController@search');
Route::get('/logout', 'DashboardController@logout');

Route::get('/home', 'HomeController@index')->name('home');