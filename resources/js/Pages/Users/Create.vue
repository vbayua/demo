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
        </label>

        <button
            type="submit"
            class="bg-blue-400 text-white px-6 py-2 rounded-xl"
        >
            Submit
        </button>
    </form>
</template>

<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

let form = reactive({
    name: "",
    email: "",
    password: "",
});

const submit = () => {
    router.post("/users", form);
};
</script>
