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
    return view('welcome');
});

// Route::get('/demo', function ($name, $pass) {
//     return view('demo', ['name' => $name]);
// })->middleware('CheckLogin');

Route::post('/demo', function (Illuminate\Http\Request $request) {
    return view('demo');
})->middleware('CheckLogin');

Route::prefix('admin')->group(function () {
    Route::get('/trangchu', function () {
        return view('trangchu');
    });

    Route::get('/gioithieu', function () {
        return view('gioithieu');
    });

    Route::get('/ban', function () {
        return view('ban');
    });

    Route::get('/ghe', function () {
        return view('ghe');
    });

    Route::get('/lienhe', function () {
        return view('lienhe');
    });
});

Route::get('/login', function () {
    return view('login');
});