<template>
    <h1>Hello {{ name }}!!</h1>

    <p>In this series, we will use the following frameworks:</p>

    <ul>
        <li v-for="frameworks in frameworks" v-text="frameworks"></li>
        <li v-for="framework in frameworks" :key="framework">
            {{ framework }}
        </li>
    </ul>

    <Nav />
</template>

<script>
import Nav from "../Shared/Nav.vue";
export default {
    props: {
        name: String,
        frameworks: Array,
    },
    components: {
        Nav,
    },
};
</script>
