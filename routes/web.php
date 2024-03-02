<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serieController;

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
    return redirect('/series');
});



Route::get("/series",[serieController::class,'index'])->name('series.series');
Route::get("/series/criar",[serieController::class,'create'])->name('series.create');
Route::post("/series/salvar",[serieController::class,'store'])->name('series.store');
Route::delete("/series/destroy/{id}",[serieController::class,'destroy'])->name('series.destroy');