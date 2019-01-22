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

// TODO: Fix Later
Route::get('/', 'PageController@index');
Route::get('/resources', 'ResourcesController@index');

Route::get('/white-papers', 'WhitePapersController@index');
Route::get('/white-paper/{slug}', 'WhitePapersController@show');

Route::get('/case-studies', 'CaseStudiesController@index');
Route::get('/case-study/{slug}', 'CaseStudiesController@show');

Route::get('/{page}', 'PageController@index');
