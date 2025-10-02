<template>
    <Link
        class="text-blue-500 hover:underline p-3 "
        :class="{ 'font-bold underline p-4': active }"
        ><slot
    /></Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";

// var classActive = { 'font-bold underline p-4': active }

export default {
    components: { Link },
    props: { active: Boolean}
};
</script>
