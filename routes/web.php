<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return response() -> json([
        'name' => 'Arjun'
    ]);
});

Route::get('/user-page', function () {
    return view('user', ['name' => 'Arjun', 'friends' => 0, 'authenticated' => false, 'user']);
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});
