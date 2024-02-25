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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('parameterTkds', App\Http\Controllers\ParameterTkdController::class);


Route::resource('parameterIndikators', App\Http\Controllers\ParameterIndikatorController::class);


Route::resource('parameterLaporans', App\Http\Controllers\ParameterLaporanController::class);




Route::resource('monitoringApbds', App\Http\Controllers\MonitoringApbdController::class);


Route::resource('monitoringAlokasis', App\Http\Controllers\MonitoringAlokasiController::class);


Route::resource('monitoringPenyalurans', App\Http\Controllers\MonitoringPenyaluranController::class);


Route::resource('monitoringPenggunaans', App\Http\Controllers\MonitoringPenggunaanController::class);


Route::resource('monitoringTls', App\Http\Controllers\MonitoringTlController::class);


Route::resource('evaluasiRengars', App\Http\Controllers\EvaluasiRengarController::class);


Route::resource('evaluasiKontraks', App\Http\Controllers\EvaluasiKontrakController::class);


Route::resource('evaluasiIndikators', App\Http\Controllers\EvaluasiIndikatorController::class);


Route::resource('evaluasiLaporans', App\Http\Controllers\EvaluasiLaporanController::class);


Route::resource('kebijakanOtsuses', App\Http\Controllers\KebijakanOtsusController::class);


Route::resource('rippOtsuses', App\Http\Controllers\RippOtsusController::class);


Route::resource('urusanBersamaOtsuses', App\Http\Controllers\UrusanBersamaOtsusController::class);


Route::resource('silpaOtsuses', App\Http\Controllers\SilpaOtsusController::class);


Route::resource('suratTugas', App\Http\Controllers\SuratTugasController::class);


Route::resource('pelaporans', App\Http\Controllers\PelaporanController::class);
