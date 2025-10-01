<template>
    <Layout>
        <h1 class="text-4xl font-bold pb-2">Hello {{ name }}!!</h1>

        <p>In this series, we will use the following frameworks:</p>

        <h1>V-for with :Key</h1>
        <ul>
            <li v-for="item in frameworks">- {{ item }}</li>
        </ul>
    </Layout>
</template>

<script>
import Nav from "../Shared/Nav.vue";
import Layout from "../Shared/Layout.vue";
export default {
    props: {
        name: String,
        frameworks: Array,
    },
    components: {
        Nav, Layout
    },
};
</script>
