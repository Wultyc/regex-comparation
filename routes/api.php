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

Route::post('/testRegex/DB-Select', 'APIController@dbSelect')->name('teste-dbSelect');
Route::post('/testRegex/DB-Select-With-Limit', 'APIController@dbSelectWithLimit')->name('teste-dbSelectWithLimit');
Route::post('/testRegex/PHP-Search', 'APIController@phpSearch')->name('teste-phpSearch');
Route::post('/testRegex/PHP-Search-With-Stop', 'APIController@phpSearchWithStop')->name('teste-phpSearchWithStop');