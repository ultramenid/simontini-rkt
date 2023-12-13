<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PetadataController;
use App\Http\Controllers\StatistikController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
// URL::forceScheme('https');

// frontend

// Route::get('/', [IndexController::class, 'index'])->name('index');
// Route::get('/petadata', [PetadataController::class, 'index'])->name('petadata');
// Route::get('/petadata/getprov', [PetadataController::class, 'getProv'])->name('getprov');
// Route::get('/statistik/dinamika', [StatistikController::class, 'index'])->name('dinamika');
// Route::get('/statistik/tatabatas', [StatistikController::class, 'tatabatas'])->name('tatabatas');
// Route::get('/statistik/penetapan', [StatistikController::class, 'penetapan'])->name('penetapan');

Route::get('/', [PetadataController::class, 'index'])->name('petadata');
