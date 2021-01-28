<?php

use Illuminate\Support\Facades\Route;

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
	$date = date("D, j F, g:i");
	$apiKey = "63140712d2a8be188a1d395ef6f3da0a";
	$cityId = "571476";
	$apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=ru&units=metric&APPID=" . $apiKey;

	$crequest = curl_init();

	curl_setopt($crequest, CURLOPT_HEADER, 0);
	curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crequest, CURLOPT_URL, $apiUrl);
	curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($crequest, CURLOPT_VERBOSE, 0);
	curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($crequest);

	curl_close($crequest);
	$data = json_decode($response);
	$currentTime = time();
	$temperature = $data->main->temp;
	$weather = ucwords($data->weather[0]->description);
    return view('weather', compact('date' ,'temperature', 'weather'));
});

