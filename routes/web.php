<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/Mahasiswa', [MahasiswaController::class, 'index'])->name('Mahasiswa');
Route::get('/Mahasiswa/addform', [MahasiswaController::class, 'add'])->name('addMahasiswa');
Route::post('/Mahasiswa/addform', [MahasiswaController::class, 'insertdata'])->name('insertMahasiswa');   
Route::get('/Mahasiswa/updateform/{id}', [MahasiswaController::class, 'readdata'])->name('readMahasiswa');
Route::get('/Mahasiswa/allform/{id}', [MahasiswaController::class, 'alldata'])->name('allMahasiswa');
Route::post('/Mahasiswa/updateform/{id}', [MahasiswaController::class, 'updatedata'])->name('updateMahasiswa');
Route::get('/Mahasiswa/{id}', [MahasiswaController::class, 'deletedata'])->name('deleteMahasiswa');