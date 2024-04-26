<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return "hello Words";
})->middleware('auth:sanctum');


Route::get('/students', [StudentController::class, 'index']);
Route::Post('/students', [StudentController::class, 'store']);

Route::get('students/{id}',[StudentController::class, 'show']);