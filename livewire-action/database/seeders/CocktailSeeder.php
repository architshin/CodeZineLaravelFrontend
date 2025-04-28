<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$listData[] = "ホワイトレディー";
		$listData[] = "バラライカ";
		$listData[] = "XYZ";
		$listData[] = "ニューヨーク";
		$listData[] = "マンハッタン";
		$listData[] = "ミシシッピミュール";
		$listData[] = "ブルーハワイ";
		$listData[] = "マイタイ";
		$listData[] = "マティーニ";
		$listData[] = "ブルームーン";
		$listData[] = "モヒート";
		foreach($listData as $id => $name) {
			DB::table("cocktails")->insert([
				"name" => $name,
				"price" => rand(1000, 1500)
			]);
		}
	}
}
