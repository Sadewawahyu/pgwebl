<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointController;
use App\Http\Controllers\PolylinesController;
use App\Http\Controllers\PolygonsController;
use App\Http\Controllers\TableController;

Route::get('/', [PointController::class, 'index'])->name('map');

Route::get('/table', [TableController::class, 'index'])->name('table');

// Route::post('/store-point', [PointController::class, 'store'])-> name('point.store');

Route::resource('point', PointController::class);
Route::resource('polyline', PolylinesController::class);
Route::resource('polygons', PolygonsController::class);
