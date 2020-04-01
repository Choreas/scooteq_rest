<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::delete('/country','CountryController@destroy');
Route::put('/country','CountryController@update');
Route::delete('/pricegroup','PricegroupController@destroy');
Route::put('/pricegroup','PricegroupController@update');
Route::delete('/scooterlocation','ScooterLocationController@destroy');
Route::put('/scooterlocation','ScooterLocationController@update');

Route::apiResources([
    'battery' => 'BatteryController',
    'contract' => 'ContractController',
    'country' => 'CountryController',
    'customer' => 'CustomerController',
    'location' => 'LocationController',
    'pricegroup' => 'PricegroupController',
    'scooter' => 'ScooterController',
    'scooterlocation' => 'ScooterLocationController',
    'seat' => 'SeatController',
    'speed' => 'SpeedController',
]);