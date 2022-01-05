<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\CitizensController;
use App\Http\Controllers\BooksController;

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

Route::get('menus/kitoblar', function () {
    return view('template.blog');
})->name('kitoblar');

Route::get('geodeziya-kitob', function () {
    return view('template.book1');
})->name('kitobgeodeziya');

Route::get('menus/bosh-sahifa', function () {
    return view('template.index');
})->name('template.index');

Route::get('menus/yangiliklar', function () {
    return view('template.services');
})->name('yangiliklar');

Route::get('menus/uskunalar', function () {
    return view('template.apply');
})->name('uskunalar');

Route::get('menus/boglanish', function () {
    return view('template.contact');
})->name('boglanish');

Route::get('/elements', function () {
    return view('template.elements');
})->name('template.elements');

Auth::routes();

Route::get('/home', function () {
    return view('template.index');
})->name('template.index2');

Route::resource('books', BooksController::class);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('menus', MenusController::class);
});

// Route::group(['middleware' => ['role:admin']], function () {
//     Route::resource('books', BooksController::class);
// });

Route::group(['middleware' => ['role:user']], function () {
    Route::resource('citizens', CitizensController::class);
});

