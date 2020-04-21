<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'InvoiceController@index');
Route::get('/invoice', 'InvoiceController@submit');
