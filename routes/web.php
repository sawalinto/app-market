<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\UpdateController;

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

Route::get('/login', [Controller::class, 'index'])->name('login');
Route::post('/login', [Controller::class, 'login']);
Route::get('/register', [Controller::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/', [Dashboard::class, 'index']);
    Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');
    Route::get('/orderBarang', [Controller::class, 'orderBarang'])->name('orderBarang');
    Route::get('/profile', [Controller::class, 'profile']);
    Route::get('/produksiBarang', [Controller::class, 'produksiBarang']);
    Route::get('/laporan', [Controller::class, 'laporan']);
    Route::get('/superadmin', [Controller::class, 'superAdmin']);

    Route::post('/createOutlet', [CreateController::class, 'createOutlet']);
    Route::post('/createKaryawan', [CreateController::class, 'createKaryawan']);
    Route::post('/createBarang', [CreateController::class, 'createBarangList']);
    Route::post('/createOrder', [CreateController::class, 'createOrder']);
    Route::post('/createProduksi', [CreateController::class, 'createProduksi']);
    Route::post('/createKategory', [CreateController::class, 'createKategory']);
    Route::post('/createSatuan', [CreateController::class, 'createSatuan']);
    Route::post('/createUser', [CreateController::class, 'createUser']);
    Route::post('/createPosisi', [CreateController::class, 'createPosisi']);
    Route::post('/createLaporan', [CreateController::class, 'createLaporan']);


    Route::get('/hapusKaryawan/{uidKaryawan}', [DeleteController::class, 'hapusKaryawan']);
    Route::get('/hapusOutlet/{uidOutlet}', [DeleteController::class, 'hapusOutlet']);
    Route::get('/hapusBarangList/{uidBarang}', [DeleteController::class, 'hapusBarangList']);
    Route::get('/hapusOrder/{uidOrder}', [DeleteController::class, 'hapusOrder']);
    Route::get('/hapusKategory/{uidKategory}', [DeleteController::class, 'hapusKategory']);
    Route::get('/hapusSatuan/{uidSatuan}', [DeleteController::class, 'hapusSatuan']);
    Route::get('/hapusUser/{emailUser}', [DeleteController::class, 'hapusUser']);
    Route::get('/hapusPosisi/{uidPosisi}', [DeleteController::class, 'hapusPosisi']);
    Route::get('/hapusLaporan/{uidLaporan}', [DeleteController::class, 'hapusLaporan']);

    Route::get('/updatePending/{uid}', [UpdateController::class, 'updatePending']);
    Route::put('/updateKaryawan', [UpdateController::class, 'updateKaryawan']);
    Route::put('/updateOutlet', [UpdateController::class, 'updateOutlet']);
    Route::put('/updateBarangList', [UpdateController::class, 'updateBarangList']);
    Route::put('/updateKategory', [UpdateController::class, 'updateKategory']);
    Route::put('/updateSatuan', [UpdateController::class, 'updateSatuan']);
    Route::put('/updateUser', [UpdateController::class, 'updateUser']);
    Route::put('/updateLaporan', [UpdateController::class, 'updateLaporan']);
    Route::put('/updateRanking', [UpdateController::class, 'updateRanking']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});
