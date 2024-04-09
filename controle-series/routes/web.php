<?php

use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
    // return view('welcome');
});

// Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);

Route::resource('/series', SeriesController::class)->except(['show']);

// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name("series.destroy");

// Route::get('/series/{serie}/edit', [SeriesController::class, 'edit'])->name("series.edit");

// Route::put('/series/{serie}', [SeriesController::class, 'update'])->name("series.update");

// Route::controller(SeriesController::class)->group(function() {
//     Route::get('/series', 'index')->name("series.index");
//     Route::get('/series/criar', 'create')->name("series.create");
//     Route::post('/series/salvar', 'store')->name("series.store");
// });

// Route::get('/series', [SeriesController::class, 'index']);
// Route::get('/series/criar', [SeriesController::class, 'create']);
// Route::post('/series/salvar', [SeriesController::class, 'store']);
