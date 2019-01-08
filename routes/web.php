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

Route::get('/', 'PageController@index')->name('page.index');
Route::post('/send', 'SendEmailController@send');
Route::resource('api/address', 'Api\AddressController');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
