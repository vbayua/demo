<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    return Inertia::render('Home', [
        'name' => 'Home',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'name' => 'About'
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'name' => 'Users'
    ]);
});

Route::post('logout', function () {
    dd('logg out');
});
