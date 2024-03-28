<template>
    <div>
        <h1>{{ name }}</h1>
    </div>
    <Nav />
</template>

<script>
import Nav from "../Shared/Nav.vue";
export default {
    components: { Nav },
    props: {
        name: String,
    },
};
</script>
