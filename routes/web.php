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

Route::get('/', 'ContentsController@home')->name('home');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');


Route::get('/company', function () {
    $response_arr = [];
    $response_arr['name'] = 'GSK Glakso Smith Cline';
    $response_arr['address'] = 'Lahore';
    return $response_arr;
});

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'Zubair Rehman';
    $response_arr['version'] = '1.1.0';
    return $response_arr;
});

Route::get('/home', function () {
	$data = [];
	$data['author'] = 'Zubair Rehman';
	$data['version'] = '0.1.1';
    return view('welcome', $data);
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {
    
    return DB::select('SELECT * from table');
});

Route::get('/facades/encrypt', function () {
    
    return Crypt::encrypt('123456789');
});

Route::get('/facades/decrypt', function () {
    
    return Crypt::decrypt('eyJpdiI6ImZOR0piYURxelJDV2hVckNuczVlUUE9PSIsInZhbHVlIjoiUXEwUW93UnZRcmdlV1BqYnFMQ2w4MnptcEJYSklZZmNZeUhveWU1aXNlOD0iLCJtYWMiOiJiNDAzMDI4YTY0YTBjZDQ2ZWY2NWM3ZDcwZGVmYmU0Yjg2MTdiOTc0Nzc3NDdkZTZhYjZkNDMyMjRjMjcyZWVkIn0=');
});




