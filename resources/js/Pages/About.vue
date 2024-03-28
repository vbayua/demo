<template>
    <Layout>
        <h1>{{ name }}</h1>
    </Layout>
</template>

<script setup>
defineProps({
    name: String,
});
</script>
