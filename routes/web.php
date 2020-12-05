<?php


use App\Models\phone;
use App\Models\company;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PhoneResource;
use App\Http\Resources\companyResource;
use App\http\Controllers\phoneController;
use App\http\Controllers\companyController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/phones','phoneController@index');
Route::get('/phones/{phone}','phoneController@show');
Route::post('/phones','phoneController@store');
Route::put('/phones/{phone}','phoneController@update');
Route::delete('/phones/{phone}','phoneController@destroy');
Route::get('/companys','companyController@index');
Route::get('/companys/{phone}','companyController@show');
Route::post('/companys','companyController@store');
Route::put('/companys/{phone}','companyController@update');
Route::delete('/companys/{phone}','companyController@destroy');
