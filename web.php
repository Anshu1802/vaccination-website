<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerpage;

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





Route::get('/',  [controllerpage::class,'ansh'] );
Route::get('/register', [controllerpage::class,'register']);
Route::get('/contact',[controllerpage::class,'contact']);
Route::get('/about',[controllerpage::class,'about']);
Route::post('/submi',[controllerpage::class,'submit'] );   //
Route::post('/feedbac',[controllerpage::class,'feedbackf']);