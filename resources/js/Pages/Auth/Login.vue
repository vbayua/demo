<template>
    <Head title="Create new user" />

    <main class="grid place-items-center min-h-screen">
        <section
            class="max-w-md mx-auto mt-10 space-y-6 border rounded p-9 shadow"
        >
            <h1 class="text-3xl text-center">Login</h1>
            <form @submit.prevent="submit">
                <label for="email" class="block text-xs text-gray-700 mb-2">
                    Email
                    <input
                        type="email"
                        class="border p-2 w-full"
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
                        class="border p-2 w-full"
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
                    class="bg-blue-400 text-white px-6 py-2 rounded w-full"
                    :class="{ 'hidden ': form.processing }"
                    :disabled="form.precessing"
                >
                    Submit
                </button>
            </form>
        </section>
    </main>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
// import Guest from "../../Shared/Guest.vue";
// defineOptions({ layout: Guest });
defineOptions({ layout: null });
let form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post("/login", form);
};
</script>
