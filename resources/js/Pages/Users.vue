<template>
    <Layout>
        <Head title="User Page" />
        <div>
            <h1 v-if="awesome">Users</h1>
            <h1 v-else>Not User</h1>

            <button @click="awesome = !awesome">Toogle</button>
        </div>

        <p class="mt-96">The current time is {{ time }}.</p>
        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import { Link, Head } from "@inertiajs/vue3";

export default {
    components: {
        Layout,
        Link, Head
    },
    props: {
        time: String,
    },
};
</script>

<script setup>
import { ref } from "vue";
const awesome = ref(true);
</script>
