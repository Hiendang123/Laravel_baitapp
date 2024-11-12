<?php

use App\Http\Controllers\ChuvihcnController;
use App\Http\Controllers\DientichHcnController;
use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;

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
})->name('homelaravel');


Route::get('sumnumber', [SumController::class, 'sum'])->name('sum.sumnumber');

Route::post('tinhtong', [SumController::class, 'tinhtong'])->name('sum.tinhtong');

Route::get('chuvihcn', [ChuvihcnController::class, 'index'])->name('hinhhoc.chuvi-hcn');

Route::post('tinhchuvi', [ChuvihcnController::class, 'tinhchuvihcn'])->name('hinhhoc.tinhchuvihcn');

Route::get('dientichhcn', [DientichHcnController::class, 'index'])->name('hinhhoc.dientich-hcn');

Route::post('tinhdientich', [DientichHcnController::class, 'tinhdientichhcn'])->name('hinhhoc.tinhdientichhcn');
