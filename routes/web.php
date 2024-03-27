<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;


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

// user routes for registration
include __DIR__ . '/web/User.php';
// auth routes for login, logout, password reset etc
include __DIR__ . '/web/Auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index']);
});


