<script setup lang="ts">
import {ref} from "vue";
//Cocktailインターフェースを定義。
interface Cocktail {
	id: number;
	name: string;
	price: number;
}
//Propsインターフェースを定義。
interface Props {
	cocktailList: Cocktail[];
}
//Propsの取得。
const props = defineProps<Props>();
//詳細情報セクションの表示非表示切替用変数の用意。
const detailSection = ref(false);
//詳細表示セクションに表示するCocktailオブジェクト用変数の用意。
const selectedCocktail = ref<Cocktail|null>(null);
//詳細表示セクションを表示させるメソッド。
const showDetail = (id: number) => {
	//詳細表示セクションに表示するカクテルデータを取得。
	selectedCocktail.value = props.cocktailList.find(
		(cocktailInList: Cocktail) => {
			return cocktailInList.id === id;
		}
	);
	//詳細表示セクションを表示に変更。
	detailSection.value = true;
};
//詳細表示セクションを非表示にするメソッド。
const closeDetail = () => {
	//詳細表示セクションを非表示に変更。
	detailSection.value = false;
	//詳細表示セクションに表示するカクテルデータをnullに変更。
	selectedCocktail.value = null;
};
</script>

<template>
	<h1>カクテル管理</h1>
	<section>
		<h2>カクテルリスト</h2>
		<ul>
			<li v-for="cocktail in cocktailList" v-bind:key="cocktail.id"><a v-on:click="showDetail(cocktail.id)">{{cocktail.name}}</a></li>
		</ul>
		<p>
			<a href="#">カクテルの追加はこちら</a>
		</p>
	</section>
	<section v-if="detailSection">
		<h2>{{selectedCocktail?.name}}の詳細</h2>
		<dl>
			<dt>ID</dt>
			<dd>{{selectedCocktail?.id}}</dd>
			<dt>名前</dt>
			<dd>{{selectedCocktail?.name}}</dd>
			<dt>金額</dt>
			<dd>{{selectedCocktail?.price}}</dd>
		</dl>
		<button v-on:click="closeDetail">閉じる</button>
	</section>
</template>
