<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProfileController::class, 'index']);
Route::get('/aboutme', [ProfileController::class, 'about']);
Route::get('/experience', [ProfileController::class, 'experience']);
Route::get('/project', [ProfileController::class, 'project']);
Route::get('/contactme', [ProfileController::class, 'contact']);
Route::get('/cv', [ProfileController::class, 'cv']);