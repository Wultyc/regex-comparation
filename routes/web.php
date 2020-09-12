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

Route::get('/testRegex', 'MainController@index')->name('teste-homepage');
Route::post('/testRegex/DB-Select', 'MainController@dbSelect')->name('teste-dbSelect');
Route::post('/testRegex/DB-Select-With-Limit', 'MainController@dbSelectWithLimit')->name('teste-dbSelectWithLimit');
Route::post('/testRegex/PHP-Search', 'MainController@phpSearch')->name('teste-phpSearch');
Route::post('/testRegex/PHP-Search-With-Stop', 'MainController@phpSearchWithStop')->name('teste-phpSearchWithStop');