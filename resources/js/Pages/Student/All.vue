<script setup>
import Layout from "../../Shared/Layout.vue";

defineProps({
    user: Object,
});

defineOptions({ layout: Layout });
</script>

<template>
    <div>
        <h1>Ini adalah halaman student</h1>
        <p class="text-red-500">
            Anda adalah {{ user.name }} dan berumur {{ user.age }} Tahun
        </p>
    </div>
</template>
