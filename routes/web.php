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
Route::get('/index' ,function(){
    return view('index');
});
Route::get('/home' ,function(){
    return view('home');
});
Route::get('/courses' ,function(){
    return view('courses');
});
Route::get('/contact' ,function(){
    return view('contact');
});
Route::get('/new' ,function(){
    return view('new');
});
Route::get('/product' ,function(){
    return view('product');
});
Route::get('/bootstrap' ,function(){
    return view('bootstrap');
});
Route::get('/javascript' ,function(){
    return view('javascript');
});
Route::get('/paaap' ,function(){
    return view('paaap');
});
Route::get('/login' ,function(){
    return view('login');
});
Route::get('/newpage' ,function(){
    return view('newpage');
});
Route::get('/newcontact' ,function(){
    return view('newcontact');
});
Route::get('/monady' ,function(){
    return view('monady');
});
Route::get('/newcss' ,function(){
    return view('newcss');
});
Route::get('/adminlogin' ,function(){
    return view('adminlogin');
});
Route::get('/serviceprovider' ,function(){
    return view('serviceprovider');
});
Route::get('/acmore' ,function(){
    return view('acmore');
});
Route::get('/adminlogin' ,function(){
    return view('adminlogin');
});
Route::get('/serviceprovider' ,function(){
    return view('serviceprovider');
});
Route::get('/register' ,function(){
    return view('register');
});
Route::get('/location' ,function(){
    return view('location');
});

