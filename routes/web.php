<?php

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
    return view('template.index');
})->name('template.index');

Route::get('/services', function () {
    return view('template.services');
})->name('template.services');

Route::get('/about', function () {
    return view('template.about');
})->name('template.about');

Route::get('/apply', function () {
    return view('template.apply');
})->name('template.apply');

Route::get('/blog', function () {
    return view('template.blog');
})->name('template.blog');

Route::get('/blog_details', function () {
    return view('template.blog_details');
})->name('template.blog_details');

Route::get('/contact', function () {
    return view('template.contact');
})->name('template.contact');

Route::get('/elements', function () {
    return view('template.elements');
})->name('template.elements');


// Route::get('/main', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
