<script setup>
import NavLink from '../Components/NavLink.vue';
</script>

<template>
	<div>
		<header class="bg-gray-800 text-white p-4">
			<nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
				<div class="space-x-6">
					<NavLink routeName="home">Home</NavLink>
				</div>
					<div class="space-x-6">
						<NavLink routeName="register">Register</NavLink>
					</div>
			</nav>
		</header>
		<main class="p-4">
			<slot />
		</main>
	</div>
</template>
<script></script>