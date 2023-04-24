<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->name('user');

// Route::get('/user/profile', function () {
//     return 'admin route';
// })->name('admin');

Route::prefix('/user')->group(function (){
    Route::get('/{id}', function (string $id) {
        return $id;
    })->name('user');
    
    Route::get('/profile', function () {
        return 'admin route';
    })->name('admin');
});

Route::get('/rappers', ['App\Http\Controllers\RapperController', 'getrappers']);

Route::get('/hello', function () {
    return 'Hello Arjun';
});
