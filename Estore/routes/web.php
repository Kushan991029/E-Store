<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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
    return view('login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/register',[UserController::class,'register']);
Route::post('/adduser',[UserController::class,'adduser']);
Route::get('/admin',[UserController::class,'admin']);
Route::get('/products',[UserController::class,'products']);
Route::post('/addproduct',[ProductController::class,'addproduct']);
Route::get('/newproduct',[UserController::class,'newproduct']);
Route::get('/showproduct/{id}',[ProductController::class,'showproduct']);
Route::get('/editproduct/{id}',[ProductController::class,'editproduct']);
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct']);
Route::get('/newemployee',[UserController::class,'newemployee']);
Route::get('/employees',[UserController::class,'employees']);
Route::post('/addemployee',[UserController::class,'addemployee']);
Route::get('/showemployee/{id}',[UserController::class,'showemployee']);
Route::get('/editemployee/{id}',[UserController::class,'editemployee']);
Route::get('/deleteemployee/{id}',[UserController::class,'deleteemployee']);
Route::post('/updateemployee',[UserController::class,'updateemployee']);
Route::post('/updateproduct',[ProductController::class,'updateproduct']);
Route::get('/customer',[UserController::class,'customer']);
Route::get('/placeorder',[ProductController::class,'placeorder']);
Route::get('/orderproduct/{id}',[ProductController::class,'orderproduct']);
Route::get('/logout',[UserController::class,'logout']);
