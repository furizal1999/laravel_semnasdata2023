<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::controller(App\Http\Controllers\LoginController::class)->group(function (){
//     Route::get('/', 'index')->name("user.auth");
//     Route::post('/login/process', 'login')->name("user.auth.login");
//     Route::get('/logout/process', 'logout')->name("user.auth.logout");
//     // Route::post('/insert-request/{id_user}/{lamp_to}/{lamp_status}/{status_data}', 'insertRequest')->name("user.auth.login.insert");
// });

Route::controller(App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/guest/home', 'index')->name("guest.home");
    Route::get('/', 'index');
});

Route::controller(App\Http\Controllers\RegisterController::class)->group(function (){
    Route::post('/guest/register/seminar', 'seminarRegister')->name("guest.register.seminar");
    // Route::post('/insert-request/{id_guest}/{lamp_to}/{lamp_status}/{status_data}', 'insertRequest')->name("guest.control.light.insert");
});


