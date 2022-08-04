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
    return view('welcome');
});


Route::get('/stress', function () {

    $countries = ['en', 'it', 'ru', 'is', 'uk', 'de', 'pl'];
    $iterations = 500;
    for($i = 0; $i < $iterations; $i++) {
        Http::post(\route("api.visit.store"), [
            'code' => collect($countries)->random(1)
        ]);
    }


});


