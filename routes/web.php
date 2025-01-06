<?php

use App\Http\Controllers\UserPageController;
use App\Http\Middleware\HandleTHeLanguage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([HandleTHeLanguage::class])->group(function () {

    Route::get('/', [\App\Http\Controllers\CategoryController::class, 'allCategories']);
    Route::post('/categories', [\App\Http\Controllers\CategoryController::class, 'storeCat'])->name('categories.store');
    Route::get('/lang/{lang}', [\App\Http\Controllers\CategoryController::class, 'changeLang'])->name('lang');
    Route::delete('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::put('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.edit');

    Route::get('/newses', [\App\Http\Controllers\NewsController::class, 'index']);
    Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
    Route::delete('/news/{news}', [\App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('/news/{news}/edit', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}/update', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
    Route::get('/news/{category}/category',[\App\Http\Controllers\UserPageController::class, 'filterByCategory'])->name('news.filterByCategory');
    Route::get('/changelang/{lang}', [\App\Http\Controllers\CategoryController::class, 'changeLang'])->name('lang');
    Route::get('/user-page',[UserPageController::class,'index']);
});
