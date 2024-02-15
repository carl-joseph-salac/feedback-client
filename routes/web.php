<?php

use App\Http\Controllers\feedbackClientController;
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

Route::controller(feedbackClientController::class)->group(function () {
    Route::get('/', 'termsAndCondition')->name('termsAndCondition');
    Route::get('/feedback', 'feedback')->name('feedback');
    Route::get('/confirmation', 'confirmation')->name('confirmation');
    Route::get('/thankyou', 'thankyou')->name('thankyou');
    Route::get('/welcome', 'welcome');
});

/*
Route::get('/terms-and-condition', function () {
    return view('termsAndCondition');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});
*/
