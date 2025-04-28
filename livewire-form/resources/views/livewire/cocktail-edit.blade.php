<div>
	<h1>カクテル管理</h1>
	<section>
		<h2>カクテル編集</h2>
		<form wire:submit="edit">
			<label for="cocktailName">カクテル名</label>
			<input type="text" wire:model="cocktailForm.cocktailName" id="cocktailName">
			<div>@error("cocktailForm.cocktailName") {{$message}} @enderror</div><br>
			<label for="cocktailPrice">金額</label>
			<input type="number" wire:model="cocktailForm.cocktailPrice" id="cocktailPrice">
			<div>@error("cocktailForm.cocktailPrice") {{$message}} @enderror</div><br>
			<button type="submit">更新</button>
		</form>
		<a href="/cocktailList">カクテルリストへ戻る</a>
	</section>
</div>
