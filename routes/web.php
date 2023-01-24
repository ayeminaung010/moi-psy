<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsController;
use App\Models\Category;
use App\Models\Location;
use App\Models\News;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $categories = Category::get();
    $locations = Location::get();
    $news = News::get();
    return view('home',compact('categories','locations','news'));
})->name('home');

Route::get('/category', function () {
    $categories = Category::orderBy('created_at','asc')->get();
    return view('category',compact('categories'));
})->name('category');

Route::prefix('category')->group(function(){
    Route::post('/create',[CategoryController::class,'create'])->name('category#create');
    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category#delete');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category#edit');
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('category#update');
});

Route::prefix('news')->group(function(){
    Route::post('/create',[NewController::class,'create'])->name('news#create');
    Route::get('/delete/{id}',[NewController::class,'delete'])->name('news#delete');
    Route::get('/edit/{id}',[NewController::class,'edit'])->name('news#edit');
    Route::post('/update/{id}',[NewController::class,'update'])->name('news#update');
});
