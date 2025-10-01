<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between p-2">
            <h1 class="font-bold text-lg">Inertia</h1>
            <Nav />
        </header>
    </section>

    <section class="p-6">
      <div class="max-w-3xl mx-auto">
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
};
</script>
