<script setup lang="ts">
interface Props {
	name: string;
}

defineProps<Props>();
</script>

<template>
	<main>
		<h1>Welcome</h1>
		<p>
			{{name}}さん、こんにちは!
		</p>
	</main>
</template>
