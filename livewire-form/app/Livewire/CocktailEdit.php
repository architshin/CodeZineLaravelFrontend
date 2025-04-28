<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\CocktailForm;
use App\Models\Cocktail;

class CocktailEdit extends Component
{
	public CocktailForm $cocktailForm;
	
	public function mount(Cocktail $cocktail)
	{
		$this->cocktailForm->setCocktail($cocktail);
	}

	public function edit()
	{
		$this->cocktailForm->update();
		return redirect()->to("/cocktailList");
	}

	public function render()
	{
		return view("livewire.cocktail-edit");
	}
}
