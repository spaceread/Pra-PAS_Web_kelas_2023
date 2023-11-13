<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;


Route::get('/', function () {
    return view('Page');
});

Route::get('/data', [SiswaController::class, 'viewAllData']);
Route::get('/data/{id}', [SiswaController::class, 'viewDetailData']);