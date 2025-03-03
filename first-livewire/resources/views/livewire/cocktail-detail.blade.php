<div>
	<h1>{{$cocktail->getName()}}の詳細</h1>
	<dl>
		<dt>ID</dt>
		<dd>{{$cocktail->getId()}}</dd>
		<dt>名前</dt>
		<dd>{{$cocktail->getName()}}</dd>
		<dt>金額</dt>
		<dd>{{$cocktail->getPrice()}}</dd>
	</dl>
	<a href="/cocktailList">戻る</a>
</div>
