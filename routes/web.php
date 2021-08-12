<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotarController;
use App\Http\Controllers\RoupaController;
use App\Http\Controllers\EnqueteController;


//Votar
Route::resource('/votar', VotarController::class); 

//Roupas
Route::resource('/roupa', RoupaController::class);


//Enquete

Route::resource('/', EnqueteController::class);