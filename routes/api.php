<?php

use App\Http\Controllers\AskDoctorController;
use App\Http\Controllers\SettingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('ask-doctor', AskDoctorController::class);
Route::apiResource('settings', SettingsController::class);

