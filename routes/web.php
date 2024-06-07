<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MatkulController;
use Barryvdh\DomPDF\Facade\Pdf;
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
Route::get('/pdf-Mahasiswa', [MahasiswaController::class, 'exportpdf'])->name('pdfMahasiswa');

Route::get('/Matkul', [MatkulController::class, 'index'])->name('Matkul');
Route::get('/Matkul/addform', [MatkulController::class, 'add'])->name('addMatkul');
Route::post('/Matkul/addform', [MatkulController::class, 'insertdata'])->name('insertMatkul');   
Route::get('/Matkul/updateform/{id}', [MatkulController::class, 'readdata'])->name('readMatkul');
Route::get('/Matkul/allform/{id}', [MatkulController::class, 'alldata'])->name('allMatkul');
Route::post('/Matkul/updateform/{id}', [MatkulController::class, 'updatedata'])->name('updateMatkul');
Route::get('/Matkul/{id}', [MatkulController::class, 'deletedata'])->name('deleteMatkul');
Route::get('/pdf-Matkul', [MatkulController::class, 'exportpdf'])->name('pdfMatkul');