<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::post('/testRegex/DB-Select', [APIController::class,'dbSelect'])->name('teste-dbSelect');
Route::post('/testRegex/DB-Select-With-Limit', [APIController::class,'dbSelectWithLimit'])->name('teste-dbSelectWithLimit');
Route::post('/testRegex/PHP-Search', [APIController::class,'phpSearch'])->name('teste-phpSearch');
Route::post('/testRegex/PHP-Search-With-Stop', [APIController::class,'phpSearchWithStop'])->name('teste-phpSearchWithStop');