<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TrainerRegistrationController;


Route::get('/', [TrainerRegistrationController::class, 'index'])->name('index');

Route::resource('trainer-registrations', TrainerRegistrationController::class);
