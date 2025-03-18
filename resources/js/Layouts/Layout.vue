<script setup>
import NavLink from '../Components/NavLink.vue';
</script>

<template>
    <header class="bg-gray-800 text-white p-6">
        <nav>
            <div class="flex justify-between space-x-6">
                <NavLink routeName="home">Home</NavLink>
                <div class="flex items-center gap-6">
                    <NavLink routeName="register">Register</NavLink>
                    <NavLink routeName="login">Login</NavLink>
                </div>
            </div>
        </nav>
    </header>
    <main class="p-4">
        <slot />
    </main>
</template>
<script></script>