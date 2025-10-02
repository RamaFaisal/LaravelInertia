<template>
    <Head title="Home" />
    <h1 class="text-4xl font-bold pb-2">Hello {{ username }}!!</h1>

    <p>In this series, we will use the following frameworks:</p>

    <h1>V-for with :Key</h1>
    <ul>
        <li v-for="item in frameworks">- {{ item }}</li>
    </ul>
</template>

<script setup>
import Nav from "../Shared/Nav.vue";
import Layout from "../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    username: String,
    frameworks: Array,
});

defineOptions({ layout: Layout });
</script>
