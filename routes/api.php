<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherDataController;

Route::post('weather-data', [WeatherDataController::class, 'store']);