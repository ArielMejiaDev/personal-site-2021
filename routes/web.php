<?php

use App\Http\Controllers\Landing\ContactFormController;
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
    return view('welcome');
})->name('welcome');

Route::view('/about-me', 'about-me')->name('about-me');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact/store', ContactFormController::class);

Route::view('/offline', 'vendor/laravelpwa/offline');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
