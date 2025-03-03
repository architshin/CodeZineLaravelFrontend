<?php

namespace App\Livewire;

use Livewire\Component;
use App\Entities\Cocktail;

class CocktailDetail extends Component
{
	public Cocktail $cocktail;

	public function mount($id)
	{
		$listData[33456] = "ホワイトレディー";
		$listData[33457] = "バラライカ";
		$listData[33458] = "XYZ";
		$listData[33459] = "ニューヨーク";
		$listData[33460] = "マンハッタン";
		$listData[33461] = "ミシシッピミュール";
		$listData[33462] = "ブルーハワイ";
		$listData[33463] = "マイタイ";
		$listData[33464] = "マティーニ";
		$listData[33465] = "ブルームーン";
		$listData[33466] = "モヒート";

		$this->cocktail = new Cocktail($id, $listData[$id], 1200);
	}

	public function render()
	{
		return view("livewire.cocktail-detail");
	}
}
