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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cruise-list-view', function () {
    return view('cruise-list-view');
});

Route::get('tours/{slug}', "TourController@packages")->name("tour_booking");

Route::get('tours/{tour_slug}/{id}',"TourController@bookTour")->name("book_tour");

Route::get('india-dubai', function () {
    return view('india-dubai');
});


Route::get('uae-visa', function () {
    return view('uae-visa');
});

