<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Faker\Guesser\Name;






Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
