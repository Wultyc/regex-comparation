<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('teste-homepage');
Route::post('/testRegex/DB-Select', [MainController::class, 'dbSelect'])->name('teste-dbSelect');
Route::post('/testRegex/DB-Select-With-Limit', [MainController::class, 'dbSelectWithLimit'])->name('teste-dbSelectWithLimit');
Route::post('/testRegex/PHP-Search', [MainController::class, 'phpSearch'])->name('teste-phpSearch');
Route::post('/testRegex/PHP-Search-With-Stop', [MainController::class, 'phpSearchWithStop'])->name('teste-phpSearchWithStop');