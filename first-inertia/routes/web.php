<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\CocktailController;

Route::get("/", [TopController::class, "index"]);
Route::get("/cocktailList", [CocktailController::class, "showCocktailList"]);
