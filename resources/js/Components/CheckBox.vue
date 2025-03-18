<script setup>
const model = defineModel();

defineProps({
    name : String,
});
</script>

<template>
    <div class="flex gap-2">
        <input
        type="checkbox"
        v-model="model"
        :id="name"
       class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none"
        />
        <label
        :for="name"
        class="block text-md font-medium text-slate-700 cursor-pointer"

        >
        <slot/>
        </label>
    </div>

</template>