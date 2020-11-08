<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     // return view('welcome');
// });

Route::get('/',[MyController::class,'index']);

Route::get('/about',[MyController::class,'about']);

Route::get('/dashboard',[MyController::class,'dashboard']);

Route::resource('/post',PostController::class);
// Route::get('/test/{para}', function ($para) {
//     return "tester is $para";
// });


// Route::get('/about', function () {
//     return view("about");
// });