<?php

use Illuminate\Routing\Router;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
Route::group([], function (Router $router) {
    $router->get('/', [\App\Http\Controllers\BlogController::class, 'index']);
    $router->get('/category/{category_slug?}', [\App\Http\Controllers\BlogController::class, 'category'])->name('home.category');
    $router->get('/{category_slug}/{id}', [\App\Http\Controllers\BlogController::class, 'detail'])->name('home.detail');
});
