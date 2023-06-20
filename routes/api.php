<?php

use App\Http\Controllers\API\AmandemenController;
use App\Http\Controllers\API\BankController;
use App\Http\Controllers\API\BASTController;
use App\Http\Controllers\API\IkhtisarController;
use App\Http\Controllers\API\NegosiasiController;
use App\Http\Controllers\API\PengajuanNIPController;
use App\Http\Controllers\API\POSOController;
use App\Http\Controllers\API\RekananController;
use App\Http\Controllers\API\StatusProfileController;
use App\Http\Controllers\API\SuratSP3Controller;
use App\Http\Controllers\API\UserController;
use App\Models\VerifyToken;
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

Route::get('rekanan', [RekananController::class, 'all']);
Route::get('pengajuanNIP', [PengajuanNIPController::class, 'all']);
Route::get('negosiasi', [NegosiasiController::class, 'all']);
Route::get('sp3', [SuratSP3Controller::class, 'all']);
Route::get('poso', [POSOController::class, 'all']);
Route::get('amandemen', [AmandemenController::class, 'all']);
Route::get('bank', [BankController::class, 'all']);
Route::get('bast', [BASTController::class, 'all']);
Route::get('statusProfile', [StatusProfileController::class, 'all']);
Route::get('ikhtisar', [IkhtisarController::class, 'all']);

Route::post('login', [UserController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('logout', [UserController::class, 'logout']);
});