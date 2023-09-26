<script setup>
import { onMounted, ref } from 'vue'
import CardPays from '../components/CardPays.vue'

const data = ref([])

onMounted(async () => {
    const response = await fetch('https://restcountries.com/v3.1/all')
    data.value = await response.json()
})
</script>

<template>
    <div>
        <CardPays v-for="pays in data" :key="pays.cca3" :pays="pays" />
    </div>
</template>
