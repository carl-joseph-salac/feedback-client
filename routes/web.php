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
    Route::post('/cc1', 'cc1')->name('cc1');
    Route::get('/cc1checked', 'cc1Checked')->name('cc1Checked');
    Route::post('/cc2', 'cc2')->name('cc2');
    Route::get('/cc2checked', 'cc2Checked')->name('cc2Checked');
    Route::post('/cc3', 'cc3')->name('cc3');
    Route::get('/cc3checked', 'cc3Checked')->name('cc3Checked');
    Route::post('/sqd0', 'sqd0')->name('sqd0');
    Route::post('/sqd1', 'sqd1')->name('sqd1');
    Route::get('/store', 'store')->name('store');
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
