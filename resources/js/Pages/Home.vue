<template>
    <Layout>
        <h1>{{ name }} Coy</h1>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
    props: {
        name: String,
    },
};
</script>
