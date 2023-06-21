<?php

use App\Http\Controllers\API\AmandemenController;
use App\Http\Controllers\API\BankController;
use App\Http\Controllers\API\BASTController;
use App\Http\Controllers\API\Chart2021Controller;
use App\Http\Controllers\API\Chart2022Controller;
use App\Http\Controllers\API\ChartController;
use App\Http\Controllers\API\DataPINController;
use App\Http\Controllers\API\DataProyekController;
use App\Http\Controllers\API\HistoryController;
use App\Http\Controllers\API\IkhtisarController;
use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\KeahlianController;
use App\Http\Controllers\API\KlasifikasiController;
use App\Http\Controllers\API\LaporanController;
use App\Http\Controllers\API\NegosiasiController;
use App\Http\Controllers\API\PengajuanNIPController;
use App\Http\Controllers\API\POSOController;
use App\Http\Controllers\API\RekananController;
use App\Http\Controllers\API\StatusProfileController;
use App\Http\Controllers\API\SuratSP3Controller;
use App\Http\Controllers\API\TargetController;
use App\Http\Controllers\API\UserAccessMenuController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\UserMenuController;
use App\Http\Controllers\API\UserRoleController;
use App\Http\Controllers\API\UserSubMenuController;
use App\Http\Controllers\API\UserTokenController;
use App\Models\UserAccessMenu;
use App\Models\UserMenu;
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
Route::get('chart', [ChartController::class, 'all']);
Route::get('chart2021', [Chart2021Controller::class, 'all']);
Route::get('chart2022', [Chart2022Controller::class, 'all']);
Route::get('dataPIN', [DataPINController::class, 'all']);
Route::get('dataProyek', [DataProyekController::class, 'all']);
Route::get('invoice', [InvoiceController::class, 'all']);
Route::get('keahlian', [KeahlianController::class, 'all']);
Route::get('klasifikasi', [KlasifikasiController::class, 'all']);
Route::get('laporan', [LaporanController::class, 'all']);
Route::get('history', [HistoryController::class, 'all']);
Route::get('target', [TargetController::class, 'all']);
Route::get('userAccessMenu', [UserAccessMenuController::class, 'all']);
Route::get('userMenu', [UserMenuController::class, 'all']);
Route::get('userRole', [UserRoleController::class, 'all']);
Route::get('userSubMenu', [UserSubMenuController::class, 'all']);
Route::get('userToken', [UserTokenController::class, 'all']);

Route::post('login', [UserController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('logout', [UserController::class, 'logout']);
});