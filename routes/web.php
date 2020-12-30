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
Route::prefix('dashboard')->middleware('auth')->group(function (){
    Route::resource('students','App\Http\Controllers\ControlPanel\StudentController');
    Route::resource('teachers','App\Http\Controllers\ControlPanel\TeacherController');

});


Route::get('register', 'App\Http\Controllers\ControlPanel\AuthController@register')->name('register');
Route::get('login','App\Http\Controllers\ControlPanel\AuthController@login')->name('login');
Route::get('logout','App\Http\Controllers\ControlPanel\AuthController@logout')->name('logout');
Route::post('authenticate','App\Http\Controllers\ControlPanel\AuthController@authenticate')->name('authenticate');
Route::post('registered','App\Http\Controllers\ControlPanel\AuthController@registered')->name('registered');
Route::get('home',function(){return view('control panel/dashboard');})->name('home');

