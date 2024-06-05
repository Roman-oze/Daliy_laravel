<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;







Route::controller(UserController::class)->group(function(){


    Route::post('/loginUser','loginUser')->name('loginUser');
    Route::post('/store','store')->name('store');

    Route::get('/logout','logout')->name('logout');
    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('/logins','logins')->name('logins');
    Route::get('/registration','registration')->name('registration');



});











Route::controller(IndexController::class)->group(function(){

Route::get('/data','index')->name('index');
Route::get('/new/{group}','new')->name('new');
// Route::post('login','login')->name('login');
Route::get('/create','create')->name('create');
Route::get('/show','show')->name('show');
Route::get('edit/{id}','edit')->name('edit');
Route::put('update/{id}','update')->name('update');
Route::delete('delete/{id}','destroy')->name('delete');


});







// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


// Route::get('login',function(){
//     session()->put('user_id',1);
//     return redirect('/');
// });

// Route::get('logout',function(){

//     session()->forget('user_id');
//     return redirect('/');
// });

// Route::get('/no access', function(){
//  echo "you're not to allow to access this page";
// });


