<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/data/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/data/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update-data');

Route::post('/contact/data/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/data/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/contact/data', [ContactController::class, 'all_data'])->name('contact-message');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
