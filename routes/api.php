<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register',[AuthContoller::class,'register']);
Route::post('/login',[AuthContoller::class,'login']);
Route::post('/logout',[AuthContoller::class,'logout']);
Route::post('/take-token',[AuthContoller::class,'takeToken']);
Route::post('/forget-password',[AuthContoller::class,'forgetPassword']);


Route::get('/categories',[CategoryController::class,'index']);
Route::post('/categories',[CategoryController::class,'store']);
Route::get('/categories/{category}',[CategoryController::class,'show']);
Route::put('/categories/{category}',[CategoryController::class,'update']);
Route::delete('/categories/{category}',[CategoryController::class,'destroy']);

Route::get('/newses',[NewsController::class,'index']);
Route::post('/news',[NewsController::class,'store']);
Route::get('/news/{news}',[NewsController::class,'show']);
Route::put('/news/{news}',[NewsController::class,'update']);
Route::delete('/news/{news}',[NewsController::class,'destroy']);
Route::get('/news/category/{category}',[NewsController::class,'filterByCategory']);