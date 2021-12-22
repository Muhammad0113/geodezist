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
})->name('yangiliklar');

Route::get('menus/uskunalar', function () {
    return view('template.apply');
})->name('uskunalar');

Route::get('menus/xizmatlar', function () {
    return view('template.blog');
})->name('murojaatlar');

Route::get('menus/resurslar', function () {
    return view('template.blog_details');
})->name('resurslar');

Route::get('menus/boglanish', function () {
    return view('template.contact');
})->name('boglanish');

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
