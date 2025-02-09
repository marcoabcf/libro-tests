<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('courses', CourseController::class);

Route::get('students/search', [StudentController::class, 'search']);
Route::apiResource('students', StudentController::class);

Route::apiResource('registrations', RegistrationController::class);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
