<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Cocktail;

class CocktailController extends Controller
{
	public function showCocktailList()
	{
		$data["cocktailList"] = Cocktail::all();
		return Inertia::render("cocktail/CocktailList", $data);
	}
}
