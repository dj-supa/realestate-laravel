<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Home Page
Route::get('/home', function () {
    return view('pages/home');
});
// single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});
// show all listing
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
});
// user login
Route::get('/home/login', function () {
    return view('pages/login');
});
// user register
Route::get('/home/register', function () {
    return view('pages/register');
});
// user saved listings
Route::get('/account/saved', function () {
    return view('pages/saved-listings');
});
// user showing status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
