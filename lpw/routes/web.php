<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiroController;
use App\Http\Controllers\SegundoController;
use App\Http\Controllers\TerceiroController;
use App\Http\Controllers\QuartoController;
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

Route :: view ( '/' , 'index/index' );

Route::get('/primeiro_ano', [PrimeiroController::class, 'index']);

Route::get('/segundo_ano', [SegundoController::class, 'index']);

Route::get('/terceiro_ano', [TerceiroController::class, 'index']);

Route::get('/quarto_ano', [QuartoController::class, 'index']);

