<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return redirect('/login');
});

Route::controller(\App\Http\Controllers\LoginController::class) -> group(function (){
    Route::get('/login', 'login')->middleware("prevent-back-history")->middleware("member");
    Route::post('/login', 'doLogin')->middleware("prevent-back-history")->middleware("member");
    Route::post('/logout', 'doLogout')->middleware("prevent-back-history")->middleware("session");
});

Route::controller(\App\Http\Controllers\TemplateController::class) -> group(function (){
    Route::get('/template', 'template')->middleware("prevent-back-history")->middleware("session");
});
