<template>
    Hi
    {{ msg }}
</template>

<script>

export default {
    name: "App",
    setup() {
        const msg = "Hello World.";
        return { msg }
    }
}
</script>

<style>

</style>