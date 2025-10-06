<template>
    <Link
        class="text-two/75 hover:text-two/100 p-1 flex text-center"
        :class="{ 'font-bold underline': active }"
        ><slot
    /></Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";

// var classActive = { 'font-bold underline p-4': active }

export default {
    components: { Link },
    props: { active: Boolean },
};
</script>
