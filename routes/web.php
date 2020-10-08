<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VoteController;
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

// Inquiries
Route::get('/contact',[InquiryController::class, 'create'])->name('contact');
Route::post('/contact',[InquiryController::class, 'store'])->name('contact.store');

// Sign In
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/roomselect', [RoomController::class, 'index'])->name('userDash.show');
Route::post('/roomselect', [RoomController::class, 'show'])->name('userDash.show');
Route::get('/dashboard', [VoteController::class, 'index'])->name('userDash.index');
Route::post('/dashboard', [VoteController::class, 'vote'])->name('userDash.vote');

Route::get('/home', function () {
  return view('home');
})->name('home');

Route::get('/', function () {
  return redirect('home');
});
