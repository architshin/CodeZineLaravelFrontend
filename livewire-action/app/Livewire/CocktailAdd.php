<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Cocktail;

class CocktailAdd extends Component
{
	#[Validate("required")]
	public string $cocktailName;
	#[Validate("required|gte:100")]
	public int $cocktailPrice;

	public function add()
	{
		$this->validate();

		$cocktail = new Cocktail();
		$cocktail->name = $this->cocktailName;
		$cocktail->price = $this->cocktailPrice;
		$cocktail->save();
		return redirect()->to("/cocktailList");
	}
	
	public function render()
	{
		return view("livewire.cocktail-add");
	}
}
