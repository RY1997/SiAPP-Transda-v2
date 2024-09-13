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
    return redirect(url('/login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/combo-chart-data', [App\Http\Controllers\HomeController::class, 'comboChartData'])->name('comboChartData');




Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('parameterTkds', App\Http\Controllers\ParameterTkdController::class);


Route::resource('parameterIndikators', App\Http\Controllers\ParameterIndikatorController::class);


Route::resource('parameterLaporans', App\Http\Controllers\ParameterLaporanController::class);




Route::resource('monitoringApbds', App\Http\Controllers\MonitoringApbdController::class);


Route::resource('monitoringAlokasis', App\Http\Controllers\MonitoringAlokasiController::class);


Route::resource('monitoringTrens', App\Http\Controllers\MonitoringTrenController::class);
Route::get('monitoringTrens/{pemda_id}/{tahun}', [App\Http\Controllers\MonitoringTrenController::class, 'show']);


Route::resource('monitoringPenyalurans', App\Http\Controllers\MonitoringPenyaluranController::class);
Route::get('monitoringPenyalurans/{pemda_id}/{tahun}/create', [App\Http\Controllers\MonitoringPenyaluranController::class, 'create']);


Route::resource('monitoringPenggunaans', App\Http\Controllers\MonitoringPenggunaanController::class);
Route::get('monitoringPenggunaans/{pemda_id}/{tahun}/create', [App\Http\Controllers\MonitoringPenggunaanController::class, 'create']);


Route::resource('monitoringTls', App\Http\Controllers\MonitoringTlController::class);


Route::resource('evaluasiRengars', App\Http\Controllers\EvaluasiRengarController::class);
Route::get('evaluasiRengars/{st_id}/{tahun}', [App\Http\Controllers\EvaluasiRengarController::class, 'show']);


Route::resource('evaluasiKontraks', App\Http\Controllers\EvaluasiKontrakController::class);
Route::get('evaluasiKontraks/{st_id}/{tahun}', [App\Http\Controllers\EvaluasiKontrakController::class, 'show']);
Route::get('evaluasiKontraks/{st_id}/{tahun}/create', [App\Http\Controllers\EvaluasiKontrakController::class, 'create']);

Route::resource('evaluasiNonfisiks', App\Http\Controllers\EvaluasiNonfisikController::class);
Route::get('evaluasiNonfisiks/{st_id}/{tahun}', [App\Http\Controllers\EvaluasiNonfisikController::class, 'show']);
Route::get('evaluasiNonfisiks/{st_id}/{tahun}/create', [App\Http\Controllers\EvaluasiNonfisikController::class, 'create']);


Route::resource('evaluasiIndikators', App\Http\Controllers\EvaluasiIndikatorController::class);


Route::resource('evaluasiLaporans', App\Http\Controllers\EvaluasiLaporanController::class);


Route::resource('kebijakanOtsuses', App\Http\Controllers\KebijakanOtsusController::class);


Route::resource('rippOtsuses', App\Http\Controllers\RippOtsusController::class);


Route::resource('urusanBersamaOtsuses', App\Http\Controllers\UrusanBersamaOtsusController::class);


Route::resource('silpaOtsuses', App\Http\Controllers\SilpaOtsusController::class);


Route::resource('suratTugas', App\Http\Controllers\SuratTugasController::class);
Route::get('kertasKerja', [App\Http\Controllers\ExportController::class, 'index'])->name('kertasKerja.index');

Route::get('kertasKerja/progresIsian', [App\Http\Controllers\ExportController::class, 'progres'])->name('kertasKerja.progres');
Route::get('kertasKerja/progresST', [App\Http\Controllers\ExportController::class, 'progresST'])->name('kertasKerja.progresST');


Route::resource('pelaporans', App\Http\Controllers\PelaporanController::class);

Route::resource('ppbrs', App\Http\Controllers\PPBRController::class);


Route::resource('monitoringPps', App\Http\Controllers\MonitoringPpController::class);


Route::resource('evaluasiKebutuhans', App\Http\Controllers\EvaluasiKebutuhanController::class);

Route::resource('evaluasiTrens', App\Http\Controllers\EvaluasiTrenController::class);
Route::get('evaluasiTrens/{pemda_id}/{tahun}', [App\Http\Controllers\EvaluasiTrenController::class, 'show']);

Route::resource('evaluasiAlokasis', App\Http\Controllers\EvaluasiAlokasiController::class);
Route::resource('evaluasiPenyalurans', App\Http\Controllers\EvaluasiPenyaluranController::class);
Route::resource('evaluasiPenggunaans', App\Http\Controllers\EvaluasiPenggunaanController::class);


Route::resource('monitoringIndikatorMakros', App\Http\Controllers\MonitoringIndikatorMakroController::class);






Route::resource('evaluasiPrioritas', App\Http\Controllers\EvaluasiPrioritasController::class);

Route::resource('evaluasiKeberlanjutans', App\Http\Controllers\EvaluasiKeberlanjutanController::class);








Route::resource('evaluasiKebijakanAlokasis', App\Http\Controllers\EvaluasiKebijakanAlokasiController::class);


Route::resource('evaluasiSisaDaks', App\Http\Controllers\EvaluasiSisaDakController::class);


Route::resource('evaluasiImmediateOutcomes', App\Http\Controllers\EvaluasiImmediateOutcomeController::class);


Route::resource('monitoringImmediateOutcomes', App\Http\Controllers\MonitoringImmediateOutcomeController::class);


Route::resource('monitoringHibahs', App\Http\Controllers\MonitoringHibahController::class);




Route::resource('monitoringSisaTkds', App\Http\Controllers\MonitoringSisaTkdController::class);




Route::resource('monitoringDataUmumTkds', App\Http\Controllers\DataUmumMonitoringController::class);
Route::resource('evaluasiDataUmumTkds', App\Http\Controllers\DataUmumEvaluasiController::class);
