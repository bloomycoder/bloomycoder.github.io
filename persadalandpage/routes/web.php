<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
});

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('tehpersada', function () {
    return view('tehpersada');
});

Route::get('suoyangcoffee', function () {
    return view('suoyangcoffee');
});

Route::get('juscendawanmekah', function () {
    return view('juscendawanmekah');
});

Route::get('faebr', function () {
    return view('faebr');
});

