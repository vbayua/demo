<template>
    <nav>
        <ul class="flex list-disc space-x-4 list-inside">
            <li>
                <NavLink href="/" class="text-blue-500 hover:underline"
                    >Home</NavLink
                >
            </li>
            <li>
                <NavLink href="/about" class="text-blue-500 hover:underline"
                    >About</NavLink
                >
            </li>
            <li>
                <NavLink href="/users" class="text-blue-500 hover:underline"
                    >Users</NavLink
                >
            </li>
            <li>
                <NavLink href="/logout" method="post" as="button"
                    >Logout</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script>
// import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";
export default {
    components: { NavLink },
};
</script>
