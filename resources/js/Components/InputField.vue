<script setup>
import { usePage } from '@inertiajs/vue3';
const model = defineModel();

defineProps({
	label: String,
	icon: String,
	name: String,
	error: String,
	placeholder: {
		type: String,
		default: '',
	},
	type: {
		type: String,
		default: 'text',
	},
});
</script>

<template>
	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="label">
		{{ label }}
	</label>

	<div class="relative">
		<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
			<span class="text-gray-500 sm:text-sm">
				<i :class="`fa-solid fa-${icon}`"></i>
			</span>
		</div>

		<input 
			:type="type" 
			:name="name" 
			:placeholder="placeholder" 
			v-model="model"
			class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pl-10 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
	</div>
	<p v-if="error" class="text-sm text-red-500">{{ error }}</p>
</template>