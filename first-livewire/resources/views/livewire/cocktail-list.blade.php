<div>
	<h1>カクテルリスト</h1>
	<ul>
	@foreach($listData as $id => $cocktailName)
		<li wire:key="{{$id}}"><a href="/cocktailDetail/{{$id}}">{{$cocktailName}}</a></li>
	@endforeach
	</ul>
</div>
