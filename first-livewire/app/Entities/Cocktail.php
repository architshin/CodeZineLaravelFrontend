<?php

namespace App\Entities;

use Livewire\Wireable;

class Cocktail implements Wireable {
	private int $id;
	private string $name;
	private int $price;

	public function __construct(int $id, string $name, int $price) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPrice(): int
	{
		return $this->price;
	}

	public function toLivewire(): array
	{
		return [
			"id" => $this->id,
			"name" => $this->name,
			"price" => $this->price
		];
	}

	public static function fromLivewire($value)
	{
		return new static($value["id"], $value["name"], $value["price"]);
	}
}
