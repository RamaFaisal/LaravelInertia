<template>
    <div>
        <h1>Hello {{ name }}!!</h1>

        <p></p>
    </div>
</template>

<script>
export default {
    props: {
        'name': String,
        'frameworks': Array,
    },
};
</script>