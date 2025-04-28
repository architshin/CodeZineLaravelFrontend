<div>
	<h1>カクテル管理</h1>
	<section>
		<h2>カクテルリスト</h2>
		<ul>
		@foreach($listData as $cocktailInList)
			<li wire:key="{{$cocktailInList->id}}"><a wire:click="showDetail({{$cocktailInList->id}})">{{$cocktailInList->name}}</a></li>
		@endforeach
		</ul>
		<p>
			<a href="/cocktailAdd">カクテルの追加はこちら</a>
		</p>
	</section>
	@if($detailSection)
	<section>
		<h2>{{$cocktail->name}}の詳細</h2>
		<dl>
			<dt>ID</dt>
			<dd>{{$cocktail->id}}</dd>
			<dt>名前</dt>
			<dd>{{$cocktail->name}}</dd>
			<dt>金額</dt>
			<dd>{{$cocktail->price}}</dd>
		</dl>
		<button wire:click="closeDetail">閉じる</button>
	</section>
	@endif
</div>
