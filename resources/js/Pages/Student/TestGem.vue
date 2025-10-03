<template>
    <div class="list-container">
        <p class="list-header">Daftar Item Dinamis</p>

        <a
            v-for="item in items"
            :key="item.id"
            :href="generateUrl(item.slug)"
            href="/base-path"
            class="list-item"
            :class="{
                'item-active': item.id === activeId,
                'item-new': item.isNew,
            }"
            @click.prevent="setActive(item.id)"
        >
            {{ item.name }}
        </a>
    </div>
</template>

<script setup>
import { ref } from "vue";

// 1. Data Statis dan Dinamis
const activeId = ref(2); // ID item yang sedang aktif
const baseUrl = "/details/";

const items = ref([
    { id: 1, name: "Item Pertama", slug: "item-satu", isNew: false },
    { id: 2, name: "Item Kedua (Aktif)", slug: "item-dua", isNew: false },
    { id: 3, name: "Item Ketiga (Baru)", slug: "item-tiga", isNew: true },
]);

// 2. Metode untuk Mengubah State
const setActive = (id) => {
    activeId.value = id;
};

// 3. Fungsi untuk Menghasilkan URL Dinamis
const generateUrl = (slug) => {
    return baseUrl + slug; // Menghasilkan: /details/item-satu, /details/item-dua, dsb.
};
</script>

<style scoped>
/* Contoh Sederhana Gaya CSS */
.list-container {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.list-header {
    font-weight: bold;
}
.list-item {
    display: block;
    padding: 8px 10px;
    margin: 5px 0;
    text-decoration: none;
    color: #333;
    transition: background-color 0.3s;
}
.list-item:hover {
    background-color: #f0f0f0;
}
.item-active {
    background-color: #007bff; /* Gaya untuk item aktif */
    color: white !important;
    font-weight: bold;
}
.item-new {
    border-left: 5px solid #28a745; /* Gaya untuk item baru */
}
</style>
