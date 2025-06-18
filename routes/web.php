<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);

Route::get('/Dettagli/{id}', [PageController::class, 'details']);
 
Route::get('/Contatti' , [PageController::class, 'contacts']);
Route::post('/invia-email', [PageController::class, 'send']);