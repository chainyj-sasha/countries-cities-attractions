<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryController;
Route::get('/', [CountryController::class, 'show']);

use App\Http\Controllers\CityController;
Route::get('/{country}/cities', [CityController::class, 'show'])->where('country', '[a-z]+');

use App\Http\Controllers\PlaceController;
Route::get('/{city}/places', [PlaceController::class, 'show'])->where('city', '[a-z]+');

use App\Http\Controllers\DescriptionController;
Route::get('/place/{id}', [DescriptionController::class, 'show'])->where('id', '\d');

use App\Http\Controllers\AdminController;
Route::match(['get', 'post'], '/admin', [AdminController::class, 'show']);
Route::match(['get', 'post'], '/admin/insert/country', [AdminController::class, 'insertCountry']);
Route::match(['get', 'post'], '/admin/insert/city', [AdminController::class, 'insertCity']);
Route::match(['get', 'post'], '/admin/insert/place', [AdminController::class, 'insertPlace']);
