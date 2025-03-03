<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TopIndex;
use App\Livewire\CocktailList;
use App\Livewire\CocktailDetail;

Route::get("/", TopIndex::class);
Route::get("/cocktailList", CocktailList::class);
Route::get("/cocktailDetail/{id}", CocktailDetail::class);
