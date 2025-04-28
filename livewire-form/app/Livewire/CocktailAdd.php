<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Livewire\Forms\CocktailForm;

class CocktailAdd extends Component
{
	public CocktailForm $cocktailForm;

	public function add()
	{
		$this->cocktailForm->store();
		return redirect()->to("/cocktailList");
	}
	
	public function render()
	{
		return view("livewire.cocktail-add");
	}
}
