<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('welcome');
})->name('index');
Route::get('/login', function(){
    return view('login');
})->name('login');
Route::get('/register', function(){
    return view('register');
})->name('register');
Route::get('/home', "homeController@home")->name('home');
Route::get('/forgot', function(){
    return view('forgot');
})->name('forgot');
Route::post('/store', "accountController@store")->name('store');
Route::post('/verify', "AuthController@verify")->name('verify');
Route::post('/enter', "accountController@login")->name('enter');
Route::post('/recovery', "AuthController@recovery")->name('recovery');
Route::get('/email',function(){
    return view('email');
});
Route::get('/reset',"accountController@reset")->name('reset');

Route::post('/resetPass',"AuthController@resetPass")->name('resetPass');
Route::get('/logout',function(){
    Auth::guard('accounts')->logout();
    return redirect(route('index'));
})->name('logout');

