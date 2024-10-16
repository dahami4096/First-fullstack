<?php

/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 */
use App\Http\Controllers\MyDataController;

Route::get('/data', [MyDataController::class, 'getData']);
