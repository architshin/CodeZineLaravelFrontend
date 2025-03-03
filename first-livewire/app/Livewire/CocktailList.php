<?php

namespace App\Livewire;

use Livewire\Component;

class CocktailList extends Component
{
	public array $listData = [];

	public function mount()
	{
		$this->listData[33456] = "ホワイトレディー";
		$this->listData[33457] = "バラライカ";
		$this->listData[33458] = "XYZ";
		$this->listData[33459] = "ニューヨーク";
		$this->listData[33460] = "マンハッタン";
		$this->listData[33461] = "ミシシッピミュール";
		$this->listData[33462] = "ブルーハワイ";
		$this->listData[33463] = "マイタイ";
		$this->listData[33464] = "マティーニ";
		$this->listData[33465] = "ブルームーン";
		$this->listData[33466] = "モヒート";
	}

	public function render()
	{
		return view("livewire.cocktail-list");
	}
}
