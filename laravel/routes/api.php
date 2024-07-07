<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{id}', [LocationController::class, 'show']);





