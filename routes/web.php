<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
 
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
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/dashboard2', function () {
    return view('admin.dashboard2');
});

Route::get('/peminjam', function () {
    return view('admin.peminjam');
});

Route::get('/buku', function () {
    return view('admin.buku');
});

Route::get('/kategori', function () {
    return view('admin.kategori');
});

Route::get('/user', function () {
    return view('admin.user');
});


 
Route::post('/login', [LoginController::class, 'LoginController']);