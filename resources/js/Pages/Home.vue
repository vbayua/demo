<template>
    <Layout>
        <h1>{{ name }} Coy</h1>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";

defineProps({
    name: String,
});
</script>
