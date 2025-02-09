<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::post('/', [CourseController::class, 'store']);
    Route::get('/{course}', [CourseController::class, 'show']);
    Route::put('/{course}', [CourseController::class, 'update']);
    Route::delete('/{course}', [CourseController::class, 'destroy']);
});

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::post('/', [StudentController::class, 'store']);
    Route::get('/{student}', [StudentController::class, 'show']);
    Route::put('/{student}', [StudentController::class, 'update']);
    Route::delete('/{student}', [StudentController::class, 'destroy']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
