<template>
    <Head :title="name" />

    <Layout>
        <div class="flex justify-between">
            <h1 class="text-3xl">{{ name }}</h1>

            <input
                type="text"
                name="search"
                placeholder="search"
                class="border px-2 rounded"
                v-model="search"
            />

            <Link
                href="/users/create"
                class="px-6 bg-blue-500 text-white rounded-xl"
                as="button"
                >Create User</Link
            >
        </div>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div
                    class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
                >
                    <div
                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                    >
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div
                                                    class="text-sm font-medium text-gray-900"
                                                >
                                                    {{ user.name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <Link
                                            :href="`/users/${user.id}/edit`"
                                            class="text-indigo-600 hover:text-indigo-900"
                                        >
                                            Edit
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <Pagination :links="users.links" class="mt-6" />
    </Layout>
</template>

<script setup>
import Pagination from "../../Shared/Pagination.vue";
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
// import throttle from "lodash/throttle";
// or use debounce
import debounce from "lodash/debounce";

let props = defineProps({
    name: String,
    users: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(
    search,
    debounce((value) => {
        router.get(
            "/users",
            { search: value },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 300)
);
</script>
