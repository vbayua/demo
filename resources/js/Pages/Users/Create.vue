<template>
    <Head title="Create new user" />

    <h1 class="text-3xl">Create new user</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-10 space-y-6">
        <label for="name" class="block text-xs text-gray-700 mb-2">
            Name
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                id="name"
                v-model="form.name"
                required
            />
            <div
                v-if="form.errors.name"
                v-text="form.errors.name"
                class="text-red-500 text-xs mt-1"
            ></div>
        </label>
        <label for="email" class="block text-xs text-gray-700 mb-2">
            Email
            <input
                type="email"
                class="border border-gray-400 p-2 w-full"
                id="email"
                v-model="form.email"
                required
            />
            <div
                v-if="form.errors.email"
                v-text="form.errors.email"
                class="text-red-500 text-xs mt-1"
            ></div>
        </label>
        <label for="password" class="block text-xs text-gray-700 mb-2">
            Password
            <input
                type="password"
                class="border border-gray-400 p-2 w-full"
                id="password"
                v-model="form.password"
                required
            />
            <div
                v-if="form.errors.password"
                v-text="form.errors.password"
                class="text-red-500 text-xs mt-1"
            ></div>
        </label>

        <button
            type="submit"
            class="bg-blue-400 text-white px-6 py-2 rounded-xl"
            :class="{ 'hidden ': form.processing }"
            :disabled="form.precessing"
        >
            Submit
        </button>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

let form = useForm({
    name: "",
    email: "",
    password: "",
});

const submit = () => {
    form.post("/users", form);
};
</script>
