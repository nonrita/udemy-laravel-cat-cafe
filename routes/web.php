<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [COntactController::class, 'sendMail'])->name('contact');
Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');
