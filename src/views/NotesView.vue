<script setup>
const symfony = 18
const integration = 16
const reseau = 13

import { computed } from 'vue'

const moyenne = computed(() => {
    return (symfony + integration + reseau) / 3
})
</script>

<template>
    <ul>
        <li>Note sur Symfony : {{ symfony }}</li>
        <li>Note en intégration : {{ integration }}</li>
        <li>Note en réseau : {{ reseau }}</li>
        <li>Moyenne : {{ moyenne }}</li>
    </ul>
</template>

<style scoped>
li {
    color: red;
}
</style>
