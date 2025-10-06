<template>
    <Head title="User" />
    <div>
        <div class="mb-6 flex justify-between">
            <h1 class="font-bold text-4xl">User Page</h1>

            <div class="flex gap-2">
                <Link
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    href="/users/create"
                >
                    New User
                </Link>
                <input
                    type="text"
                    placeholder="Search..."
                    v-model="search"
                    class="border px-2 rounded-lg"
                />
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-6 py-3">Username</th>
                        <th scope="col" class="px-6 py-3">Email User</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="user in users.data"
                        :key="user.id"
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200"
                    >
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            {{ user.name }}
                        </th>
                        <td class="px-6 py-4">{{ user.email }}</td>
                        <td class="px-6 py-4">
                            <Link
                                :href="`/users/${user.id}/edit`"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit</Link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Paginator -->
    <Pagination :links="users.links" class="mt-6" />
</template>

<script setup>
import { Link, Head, router } from "@inertiajs/vue3";
import { ref, watch } from "vue";
import Pagination from "../../Shared/Pagination.vue";
import Layout from "../../Shared/Layout.vue";
import { debounce, throttle } from "lodash";

let props = defineProps({
    users: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(search, debounce(function(value) {
    router.get(
        "/users",
        { search: value },
        { preserveState: true },
        { replace: true },
        { preserveScroll: true }
    );
}, 300));

defineOptions({ layout: Layout });
</script>
