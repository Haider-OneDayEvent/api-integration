<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ZipCodeController;
use App\Http\Controllers\PropertyDataController;
use App\Http\Controllers\ZillowController;


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

Route::get('/leads', [LeadController::class, 'showInputForm'])->name('input_lead');

Route::post('/api/create/leads', [LeadController::class, 'store'])->name('process_lead');

Route::get('/display/all/leads', [LeadController::class, 'index'])->name('leads.index');

Route::get('/leads/{lead}/edit', [LeadController::class, 'edit'])->name('leads.edit');

Route::put('/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');

Route::get('api/zipcode/{zipcode}', [ZipCodeController::class, 'getZipCodeInfo']);

Route::get('/leads/{lead}/check-on-zillow', [ZillowController::class, 'checkOnZillow'])->name('leads.checkOnZillow');

Route::get('/leads/{lead}/Realty-Mole-Property', [PropertyDataController::class, 'propertyApi'])->name('propertyApi');

