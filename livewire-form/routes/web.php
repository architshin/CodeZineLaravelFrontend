<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CocktailList;
use App\Livewire\CocktailAdd;
use App\Livewire\CocktailEdit;

Route::get("/", function () {
	return view("welcome");
});
Route::get("/cocktailList", CocktailList::class);
Route::get("/cocktailAdd", CocktailAdd::class);
Route::get("/cocktailEdit/{cocktail}", CocktailEdit::class);
