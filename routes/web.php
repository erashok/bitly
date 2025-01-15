<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about-us', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('about');
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacy'])->name('privacy');
// Route::get('/cookies', [App\Http\Controllers\Frontend\FrontendController::class, 'cookies'])->name('cookies');
Route::get('/terms', [App\Http\Controllers\Frontend\FrontendController::class, 'terms'])->name('terms');
Route::get('/help', [App\Http\Controllers\Frontend\FrontendController::class, 'help'])->name('help');


Route::get('/', [App\Http\Controllers\UrlController::class, 'index'])->name('home');
Route::post('/shorten', [App\Http\Controllers\UrlController::class, 'store'])->name('shorten');
Route::get('/{short_url}', [App\Http\Controllers\UrlController::class, 'redirect'])->name('redirect');



