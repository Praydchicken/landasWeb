<script setup>
import TextLink from '../../Components/TextLink.vue';
import InputField from '../../Components/InputField.vue';
import PrimaryBtn from '../../Components/PrimaryBtn.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: "",
    password: "",
    remember: null,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });

};
</script>

<script>
export default {
    layout: null,
};
</script>

<template>

    <Head title=" | Sign In"></Head>
    <div class="flex flex-col md:flex-row min-h-screen overflow-y-auto">
        <div class="md:w-1/2 w-full flex items-center justify-center p-8">
            <form @submit.prevent="submit" class="w-full max-w-lg">
                <div class="py-3">
                    <TextLink routeName="home" label="Back to home" icon="arrow-left" />
                </div>
                <h1 class="text-4xl font-bold mb-6">Sign In</h1>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3 mb-6">
                        <InputField label="Email" type="Email" placeholder="Email" icon="at" v-model="form.email"
                            :error="form.errors.email" />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <InputField label="Password" type="password" placeholder="Password (8+ characters)" icon="key"
                            v-model="form.password" :error="form.errors.password" />

                        <div class="flex flex-wrap w-full justify-between outline-1 mt-3">
                            <p>Remember me</p>
                            <p>Forgot Password</p>
                        </div>
                    </div>
                    <div class="w-full px-3 mb-6 justify-center flex">
                        <PrimaryBtn class="w-full py-3">
                            Sign In <i class="fa-solid fa-chevron-right "></i></PrimaryBtn>
                    </div>
                    <div class="w-full max-w-lg mb-6 justify-center flex">
                        <p>Dont Have an account?
                            <TextLink routeName="register" label="Sign up" />
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <div class="hidden md:flex w-1/2 bg-zinc-500 text-white items-center justify-center p-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-2">Lorem ipsum dolor sit amet.</h1>
                <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</template>