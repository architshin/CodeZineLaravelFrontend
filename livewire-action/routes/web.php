<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CocktailList;
use App\Livewire\CocktailAdd;

Route::get("/", function () {
	return view("welcome");
});
Route::get("/cocktailList", CocktailList::class);
Route::get("/cocktailAdd", CocktailAdd::class);
