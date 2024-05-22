<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






Route::controller(StudentController::class)->group(function(){


    Route::get('/students','students')->name('students');
    Route::get('/view','view')->name('view');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/delete/{id}', 'destroy')->name('delete');
    Route::get('/trash/{id}', 'trash')->name('trash');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::post('/upload','upload')->name('upload');


});

Route::get('/upload',function(){

    return view('form.upload');
});

Route::get('get-all-session',function(){
    $session = session()->all();
    return $session;

 });

 Route::get('set-session',function( Request $request){
   $request->session()->put('name','roman');
   $request->session()->put('id','1234');
   return redirect('get-all-session');
 });

 Route::get('destroy-session',function(){
  session()->forget(['name','id']);
  return redirect('get-all-session');


 });
