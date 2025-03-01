<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'home'])->name('home');
Route::resource('events', EventController::class);


