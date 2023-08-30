<?php

use App\Http\Controllers\ProfileController;
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
    return view('user.register_login');
});

Route::middleware('auth')->group(function () {
    // for demo
    Route::get("/property/demo", function () {
        return view("property.index");
    })->name("property.index");

    Route::get('/corporate/index', function () {
        return view('corporate.index');
    })->name('corporate.index');

    // for demo
    Route::get("/property/demo", function(){
        return view("property.index");
    })->name("property.index");
});

require __DIR__.'/auth.php';
