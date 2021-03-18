<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\CustomersController;
use \App\Http\Controllers\AppointmentsController;
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

Route::get('/', [
    PagesController::class,
    'home'
])->name('home');

Route::get('/about', [
    PagesController::class,
    'about'
])->name('about');

Route::get('/contact', [
    PagesController::class,
    'contact'
])->name('contact');

route::resource('customers', CustomersController::class);
route::resource('appointments', AppointmentsController::class);
