<template>
    <section class="p-6">
        <header class="flex justify-between">
            <Nav />
        </header>
    </section>

    <slot />
</template>

<script>
import Nav from "./Nav.vue";
export default {};
</script>
