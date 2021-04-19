<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;

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

Route::get('/currency', [CurrencyController::class, 'list']);
Route::get('/currency/new', [CurrencyController::class, 'showForm']);
Route::post('/currency/new', [CurrencyController::class, 'create']);
Route::get('/currency/edit/{currency:CURRENCY_ID}', [CurrencyController::class, 'edit']);
Route::post('/currency/store', [CurrencyController::class, 'store']);
Route::get('/currency/delete/{currency:CURRENCY_ID}', [CurrencyController::class, 'delete']);
