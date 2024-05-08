<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Faker\Guesser\Name;
use App\Models\Student;






Route::view('/',[RegistrationController::class,'course']);
Route::get('/register',[RegistrationController::class,'form']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/student', function () {
    $students = Student::all();

    echo "<pre>";
    print_r($students->toArray());







});

