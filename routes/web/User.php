<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::get('/register/seeker', [UserController::class, 'registerSeeker'] )->name('register.seeker');
Route::post('/register/seeker', [UserController::class, 'storeSeeker'] )->name('store.seeker');

Route::get('/register/employer', [UserController::class, 'registerEmployer'] )->name('register.employer');
Route::post('/register/employer', [UserController::class, 'storeEmployer'] )->name('store.employer');
