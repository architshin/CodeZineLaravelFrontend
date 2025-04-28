<div>
	<h1>カクテル管理</h1>
	<section>
		<h2>カクテル追加</h2>
		<form wire:submit="add">
			<label for="cocktailName">カクテル名</label>
			<input type="text" wire:model="cocktailName" id="cocktailName">
			<div>@error("cocktailName") {{$message}} @enderror</div><br>
			<label for="cocktailPrice">金額</label>
			<input type="number" wire:model="cocktailPrice" id="cocktailPrice">
			<div>@error("cocktailPrice") {{$message}} @enderror</div><br>
			<button type="submit">追加</button>
		</form>
		<a href="/cocktailList">カクテルリストへ戻る</a>
	</section>
</div>
