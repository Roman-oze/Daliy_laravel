<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Faker\Guesser\Name;
use App\Models\Student;









Route::controller(RegistrationController::class)->group(function(){


    Route::get('info','data')->name('data');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/delete/{id}', 'destroy')->name('delete');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');





});





// Route::get('/student', function () {
//     $students = Student::all();

//     echo "<pre>";
//     print_r($students->toArray());

// });

