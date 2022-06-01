<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get('/a', 'App\Http\Controllers\PagesController@index')->name('home');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/about', 'App\Http\Controllers\PagesController@service')->name('about');


Route::post('/contact/submit', 'App\Http\Controllers\PagesController@submit')
    ->name('contact-form');

Route::get('/contact/all', 'App\Http\Controllers\PagesController@allData')
    ->name('contact-data');
Route::get('/contact/all/{id}', 'App\Http\Controllers\PagesController@showOneMessage')
    ->name('contact-data-one');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\PagesController@updateMessage')
    ->name('contact-update');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\PagesController@deleteMessage')
    ->name('contact-delete');
Route::post('/contact/all/{id}/update', 'App\Http\Controllers\PagesController@updateMessageSubmit')
    ->name('contact-update-submit');

Route::post('/subscribes', 'App\Http\Controllers\PagesController@subscribes')->name('subscribes');
Route::get('/signup', 'App\Http\Controllers\PagesController@signup')->name('signup');
Route::post('/signup/register', 'App\Http\Controllers\PagesController@register')->name('register');


Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
