<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'homepage'])->name('/');
Route::post('/contact/send', [PageController::class, 'send'])->name('contact.send');


// Boekestijn Routes
Route::redirect('/contact.html', '/contact', 301);
Route::redirect('/services.html', '/', 301);

Route::get('/assortiment', [\App\Http\Controllers\PageController::class, 'assortment'])->name('assortment');
Route::get('/restoration/{name}', [\App\Http\Controllers\RestorationController::class, 'show'])->name('restoration.show');
Route::get('/afspraak', [\App\Http\Controllers\PageController::class, 'appointment'])->name('appointment');
Route::get('/restauratie', [\App\Http\Controllers\PageController::class, 'restorations'])->name('restorations');

Route::post('/contact/send', [\App\Http\Controllers\PageController::class, 'sendContact'])->name('boekestijn.send');
Route::post('/afspraak/send', [\App\Http\Controllers\PageController::class, 'sendAppointment'])->name('appointment.send');

Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');

Route::get('/{name}', [\App\Http\Controllers\PageController::class, 'show'])->name('show');
