<template>
    <Head title="User" />
    <div>
        <h1>User Page</h1>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="( user, index ) in users" :key="user.id">
                    <td>{{ ++index }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>

        <!-- <ul>
            <li v-for="user in users" :key="user.id" v-text="user.name"></li>
            <li v-for="user in users" :key="user.id" v-text="user.email"></li>
        </ul> -->
    </div>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import { Link, Head } from "@inertiajs/vue3";
import { ref } from "vue";
const awesome = ref(true);

defineProps({
    users: Array,
});

defineOptions({ layout: Layout });
</script>
