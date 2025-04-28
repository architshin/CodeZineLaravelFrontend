<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Cocktail;

class CocktailForm extends Form
{
	public ?Cocktail $cocktail;
	#[Validate("required")]
	public string $cocktailName;
	#[Validate("required|gte:100")]
	public int $cocktailPrice;

	public function setCocktail(Cocktail $cocktail)
	{
		$this->cocktail = $cocktail;
		$this->cocktailName = $cocktail->name;
		$this->cocktailPrice = $cocktail->price;
	}

	public function store()
	{
		$this->validate();

		$cocktail = new Cocktail();
		$cocktail->name = $this->cocktailName;
		$cocktail->price = $this->cocktailPrice;
		$cocktail->save();
	}

	public function update()
	{
		$this->validate();
		$this->cocktail->name = $this->cocktailName;
		$this->cocktail->price = $this->cocktailPrice;
		$this->cocktail->save();
	}
}
