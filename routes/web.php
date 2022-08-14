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
    return view('welcome');
});

Auth::routes();

//THIS IS HOW TO CREATE A CONTROLLER IN LARAVEL 5.

Route::get('/home', 'UserController@index')->name('home');

Route::get('/', 'UserController@indexx')->name('home');

Route::get('/redirect', 'UserController@redirect')->name('redirect');

route::get('/kwpillars', 'AdminController@kwpillars', 'kwpillars');

route::get('/pbpillars', 'AdminController@pbpillars', 'pbpillars');

route::get('/scpillars', 'AdminController@scpillars', 'scpillars');

route::post('/addkwpillars', 'AdminController@addkwpillars', 'addkwpillars');

route::post('/addpbpillars', 'AdminController@addpbpillars', 'addpbpillars');

route::post('/addscpillars', 'AdminController@addscpillars', 'addscpillars');

route::get('/viewkwpillars', 'AdminController@viewkwpillars', 'viewkwpillars');

route::get('/viewpbpillars', 'AdminController@viewpbpillars', 'viewpbpillars');

route::get('/viewscpillars', 'AdminController@viewscpillars', 'viewscpillars');

route::get('/deletekwpillar/{id}', 'AdminController@deletekwpillar', 'deletekwpillar');

route::get('/deletepbpillar/{id}', 'AdminController@deletepbpillar', 'deletepbpillar');

route::get('/deletescpillar/{id}', 'AdminController@deletescpillar', 'deletescpillar');




route::get('kwpillars/export', 'CsvFile@csv_export')->name('export');

route::post('kwpillars/import', 'CsvFile@csv_import')->name('import');




route::get('pbpillars/export2', 'CsvFile2@csv_export2')->name('export2');

route::post('pbpillars/import2', 'CsvFile2@csv_import2')->name('import2');




route::get('scpillars/export3', 'CsvFile3@csv_export3')->name('export3');

route::post('scpillars/import3', 'CsvFile3@csv_import3')->name('import3');













//Route::get('/home', [UserController::class, 'index']); THIS IS HOW TO CREATE A CONTROLLER IN HIGHER VERSIONS OF LARAVEL. 