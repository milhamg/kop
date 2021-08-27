<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\LaporanKontroller;
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

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class,
    'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resources([
        'kredit' => KreditController::class,
        'anggota' => AnggotaController::class,
    ], [
        'parameters' => [
            'anggota' => 'anggota'
        ]
    ]);
    Route::get('kredit-validasi', [BendaharaController::class, 'index'])->name('validasi.index');
    Route::get('kredit-authorisasi', [BendaharaController::class, 'authorisasiIndex'])->name('authorisasi.index');
    Route::get('kredit-authorisasi/{kredit}', [BendaharaController::class, 'authorizeKredit'])->name('authorisasi.authorize');
    Route::get('kredit-validasi/{kredit}', [BendaharaController::class, 'validasi'])->name('validasi');
    Route::put('kredit-validasi/{kredit}', [BendaharaController::class, 'store'])->name('validate');
    Route::get('laporan/kredit', [LaporanKontroller::class, 'kridit'])->name('laporan.kredit');
    Route::get('laporan/jurnal/bendahara', [LaporanKontroller::class, 'jurnalBendahara'])->name('laporan.jurnal-bendahara');
    Route::get('slip/pencairan', [BendaharaController::class, 'slipPencairanIndex'])->name('slip.index');
    Route::get('slip/{kredit}', [BendaharaController::class, 'cetakSlip'])->name('slip.cetak');

});