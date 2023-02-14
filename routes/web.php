<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');

Route::middleware(['set_locale'])->group(function () {
    Route::get('/', function () {
        return view('main.landing');
    })->name('index');

    Route::get('/about', function () {
        return view('main.about');
    })->name('about');;

    Route::get('/investors', function () {
        return view('main.investors');
    })->name('investors');;

    Route::get('/legal-business', function () {
        return view('main.legal-business');
    })->name('legal');;

    Route::post('/mail/send', [MainController::class, 'sendMail']);
});
