<?php

use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('events',[EventController::class,'index']);
Route::get('events/{id}', [EventController::class, 'singleData']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
