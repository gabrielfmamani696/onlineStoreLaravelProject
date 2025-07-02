<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $viewData = [];
//     $viewData["title"] = "Home Page - Online Store";
//     // index esta en la carpeta home
//     return view('home.index')->with("viewData", $viewData);
// });
// Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");


Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");