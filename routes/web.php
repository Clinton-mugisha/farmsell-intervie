<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoggingController;
use App\Http\Controllers\DisplayTimeLogsController;


// Show login form
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');


// Handle login request
Route::post('/login', [LoginController::class, 'login']);


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//Time out
Route::get('/time-out', function () {
    return view('logout');
})->middleware('auth')->name('time-out');

//Checking In
Route::post('/time-in', [LoggingController::class, 'logTimeIn'])->name('timeIn');

//Checking out
Route::post('/time-out', [LoggingController::class, 'logTimeOut'])->name('timeOut');

Route::get('/report',[DisplayTimeLogsController::class, 'displayTimeLogs'])->middleware('auth')->name('report');

Route::get('/user-management', function () {
    // Add your user management logic here
    return view('user-management');
});
