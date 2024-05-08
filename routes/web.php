<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Faker\Guesser\Name;
use App\Models\Student;






Route::view('students',[RegistrationController::class,'index']);
Route::get('/create',[RegistrationController::class,'create']);
Route::post('/store',[RegistrationController::class,'store']);













// Route::get('/student', function () {
//     $students = Student::all();

//     echo "<pre>";
//     print_r($students->toArray());

// });

