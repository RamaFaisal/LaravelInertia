<template>
    <Head title="Inertia"/>
    <meta name="description" content="Inertia">
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between p-2">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">Inertia</h1>
                <p class="text-sm ml-3">Welcome Back, {{ user.name }}!!</p>
            </div>
            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>
            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "./Nav.vue";

export default {
    components: {
        Nav,
    },
    props: {
        username: String,
    },
    // computed: {
    //     username() {
    //         return this.$page.props.auth.user.username;
    //     },
    // },
};
</script>

<script setup>
import { computed } from "vue";
import { Head, usePage } from "@inertiajs/vue3";

const page = usePage();
const user = computed(() => page.props.auth.user);
</script>
