<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Cocktail;

class CocktailList extends Component
{
	public Collection $listData;
	public bool $detailSection = false;
	public Cocktail $cocktail;

	public function mount()
	{
		$this->listData = Cocktail::all();
	}

	public function showDetail($id) {
		$this->detailSection = true;
		$this->cocktail = Cocktail::find($id);
	}

	public function closeDetail() {
		$this->detailSection = false;
	}

	public function render()
	{
		return view("livewire.cocktail-list");
	}
}
