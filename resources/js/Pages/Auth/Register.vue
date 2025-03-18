<script setup>
import TextLink from '../../Components/TextLink.vue';
import InputField from '../../Components/InputField.vue';
import PrimaryBtn from '../../Components/PrimaryBtn.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
	first_name: "",
	last_name: "",
	email: "",
	password: "",
	password_confirmation: "",
});

const submit = () => {
	form.post(route('register'), {
        onFinish: () => form.reset("password", "password_confirmation"),
	});

};
</script>

<script>
export default {
	layout: null,
};
</script>

<template>

	<Head title=" | Sign Up" />
	<div class="flex flex-col md:flex-row min-h-screen overflow-y-auto">

		<div class="hidden md:flex w-1/2 bg-black text-white items-center justify-center p-8">
			<div class="text-center">
				<h1 class="text-4xl font-bold mb-2">Create your free account</h1>
				<p class="text-gray-400">Explore our core features for individuals and organizations.</p>
			</div>
		</div>

		<div class="md:w-1/2 w-full flex items-center justify-center p-8">
			<form @submit.prevent="submit" class="w-full max-w-lg">
				<div class="py-3 text-md mb-2">
					<TextLink routeName="home" label="Back to home" icon="arrow-left" />
				</div>
				<div class="flex flex-wrap -mx-3">
					<div class="w-full lg:w-1/2 px-3 mb-6">
						<InputField label="First Name" placeholder="First Name" icon="id-badge" v-model="form.first_name"
							:error="form.errors.first_name" />
					</div>

					<div class="w-full lg:w-1/2 px-3 mb-6">
						<InputField label="Last Name" placeholder="Last Name" icon="id-badge" v-model="form.last_name"
							:error="form.errors.last_name" />
					</div>
				</div>

				<div class="flex flex-wrap -mx-3 mb-4">
					<div class="w-full px-3 mb-6">
						<InputField label="Email" type="Email" placeholder="Email" icon="at" v-model="form.email"
							:error="form.errors.email" />
					</div>
					<div class="w-full px-3 mb-6">
						<InputField label="Password" type="password" placeholder="Password (8+ characters)" icon="key"
							v-model="form.password" :error="form.errors.password" />
						<p class="text-sm italic text-gray-500">Password must contain at least one uppercase and lowercase letters</p>
					</div>
					<div class="w-full px-3 mb-6">
						<InputField label="Confirm Password" type="password" placeholder="Confirm Password" icon="key"
							v-model="form.password_confirmation" :error="form.errors.password_confirmation" />
					</div>

					<div class="w-full px-3 mb-6">
						<p class="text-slate-500 text-sn">
							By clicking the "Sign Up" button, you agree to our
							<TextLink routeName="home" label="Terms of Service" />
							and
							<TextLink routeName="home" label="Privacy Policy" />
						</p>
					</div>

					<div class="w-full px-3 mb-6 justify-center flex">
						<PrimaryBtn :disabled="form.processing" class="w-full py-3">
							Sign Up <i class="fa-solid fa-chevron-right"></i></PrimaryBtn>
					</div>
					<div class="w-full max-w-lg mb-6 justify-center flex">
						<p>Already Have an account?
							<TextLink routeName="login" label="Sign in" />
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>
