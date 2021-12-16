<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;

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
})->name('template.index1');

Route::get('menus/bosh-sahifa', function () {
    return view('template.index');
})->name('template.index');

Route::get('menus/yangiliklar', function () {
    return view('template.services');
})->name('template.services');

Route::get('menus/biz-haqimizda', function () {
    return view('template.about');
})->name('template.about');

Route::get('menus/uskunalar', function () {
    return view('template.apply');
})->name('template.apply');

Route::get('menus/xizmatlar', function () {
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

Route::resource('menus', MenusController::class);


// Route::get('/main', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
