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

/* Contact Form */
Route::get('contact',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

/* Page Routes */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reverse-osmosis', function () {
    return view('reverse-osmosis');
});

Route::get('/water-softeners', function () {
    return view('water-softeners');
});

Route::get('/water-heaters', function () {
    return view('water-heaters');
});

Route::get('/whole-house-carbon', function () {
    return view('whole-house-carbon');
});

Route::get('/salt-potassium-contracts', function () {
    return view('salt-potassium-contracts');
});

Route::get('/light-plumbing', function () {
    return view('light-plumbing');
});

Route::get('/reverse-osmosis-contracts', function () {
    return view('reverse-osmosis-contracts');
});
