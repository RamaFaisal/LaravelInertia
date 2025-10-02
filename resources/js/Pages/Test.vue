<template>
    <Layout>
        <Head title="Test Page" />
        <h1 class="mt-6">Test Page</h1>

        <h1>V-text Directive</h1>
        <span class="text-blue-500">Coba {{ msg }}</span>
        <p v-text="msg" class="text-red-500"></p>
        <br />

        <h1>V-if Directive</h1>
        <div v-if="Math.random() > 0.5">Now you see me</div>
        <div v-else>Now you don't</div>
        <br />

        <h1>V-else-if Directive</h1>
        <div v-if="type === 'A'">A</div>
        <div v-else-if="type === 'B'">B</div>
        <div v-else-if="type === 'C'">C</div>
        <div v-else>Not A/B/C</div>

        <button @click="count++">Count is {{ count }}</button><br />

        <h1>V-for rendering</h1>
        <li v-for="(item, index) in items">
            {{ msg }} - {{ item.message }} - {{ index }}
        </li>
    </Layout>
</template>

<script setup>
import { ref } from "vue";
import Layout from "../Shared/Layout.vue";
import { Head } from "@inertiajs/vue3";

const msg = "Uhuy";
// const count = ref(0)
const items = ref([{ message: "Foo" }, { message: "Bar" }]);
</script>
