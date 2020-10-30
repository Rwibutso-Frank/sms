<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@sms');
Route::post('send/sms', 'HomeController@sendSms');

