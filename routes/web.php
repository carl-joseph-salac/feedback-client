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
    Route::get('/feedback', 'termsAndCondition')->name('termsAndCondition');
    Route::post('/cc1', 'cc1')->name('cc1');
    Route::get('/cc1checked', 'cc1Checked')->name('cc1Checked');
    Route::post('/cc2', 'cc2')->name('cc2');
    Route::get('/cc2checked', 'cc2Checked')->name('cc2Checked');
    Route::post('/cc3', 'cc3')->name('cc3');
    Route::get('/cc3checked', 'cc3Checked')->name('cc3Checked');
    Route::post('/sqd0', 'sqd0')->name('sqd0');
    Route::get('/sqd0Star', 'sqd0Star')->name('sqd0Star');
    Route::post('/sqd1', 'sqd1')->name('sqd1');
    Route::get('/sqd1Star', 'sqd1Star')->name('sqd1Star');
    Route::post('/sqd2', 'sqd2')->name('sqd2');
    Route::get('/sqd2Star', 'sqd2Star')->name('sqd2Star');
    Route::post('/sqd3', 'sqd3')->name('sqd3');
    Route::get('/sqd3Star', 'sqd3Star')->name('sqd3Star');
    Route::any('/sqd4', 'sqd4')->name('sqd4');
    Route::get('/sqd4Star', 'sqd4Star')->name('sqd4Star');
    Route::post('/sqd5', 'sqd5')->name('sqd5');
    Route::get('/sqd5Star', 'sqd5Star')->name('sqd5Star');
    Route::any('/sqd6', 'sqd6')->name('sqd6');
    Route::get('/sqd6Star', 'sqd6Star')->name('sqd6Star');
    Route::post('/sqd7', 'sqd7')->name('sqd7');
    Route::get('/sqd7Star', 'sqd7Star')->name('sqd7Star');
    Route::post('/sqd8', 'sqd8')->name('sqd8');
    Route::get('/sqd8Star', 'sqd8Star')->name('sqd8Star');
    Route::post('/suggestion', 'suggestion')->name('suggestion');
    Route::get('/suggestion/answered', 'suggestionAnswered')->name('suggestionAnswered');
    Route::post('/confirmation', 'confirmation')->name('confirmation');
    Route::post('/cc1/edit', 'cc1Edited')->name('cc1Edited');
    Route::post('/submitFeedback', 'saveFeedback')->name('submitFeedback');
});
