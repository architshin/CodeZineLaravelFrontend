<?php

namespace App\Livewire;

use Livewire\Component;

class TopIndex extends Component
{
	public string $name = "しんちゃん";
	public function render()
	{
		return view("livewire.top-index");
	}
}
