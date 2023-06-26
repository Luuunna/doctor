<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MedicalVisitController;
use App\Http\Controllers\HospitalController;
use App\Models\Patient;
use App\Models\Service;

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

Auth::routes();


Route::resource('doctors', DoctorController::class);

Route::resource('services', ServiceController::class);

Route::resource('patients',PatientController::class);

Route::resource('hospitals',HospitalController::class);

Route::resource('historials',HistorialController::class);

Route::resource('medical_visits',MedicalVisitController::class);
