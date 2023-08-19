<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'AuthController@login'); // Handle user login

Route::middleware(['auth'])->group(function () {
    Route::get('/excuse-slips', 'ExcuseSlipController@index'); // List excuse slips
    Route::post('/excuse-slips', 'ExcuseSlipController@store'); // Create excuse slip
    // Add more routes for other actions
});
