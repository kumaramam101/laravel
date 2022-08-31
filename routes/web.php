<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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
Route::get('/student',[TestController::class,'index']);
Route::post('/student',[TestController::class,'store']);
//Route::get('/insert', 'App\Http\Controllers\TestController::insert_data');

//  Route::get('/', function () {
//      return view('welcome');
//  });
 
// Route::get('/demo/{name?}', function($name = null){
//     echo "my name is ".$name;
// });
// Route::get('/insert', function () {
//     return view('insert_data');
// });


//========-product routes-========//
Route::get('/product', [ProductController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/add-product', [ProductController::class, 'add']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('/update-product/{id}', [ProductController::class, 'update']);
Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);

//========-Theme routes-========//
Route::get('/', [HomeController::class, 'home']);