<script setup>
import { onMounted, ref } from 'vue'
import CardPays from '../components/CardPays.vue'

const data = ref([])
const recherche = ref('');

const filtrer = () => {
    data.value = listeComplete.value.filter(pays => pays.name.common.toLowerCase().includes(recherche.value.toLowerCase()));
}

const listeComplete = ref([]);

onMounted(async () => {
    const response = await fetch('https://restcountries.com/v3.1/all');
    const allCountries = await response.json();
    listeComplete.value = allCountries;
    data.value = allCountries;
});

</script>

<template>
    <div>
        <input v-model="recherche" @input="filtrer" placeholder="Rechercher un pays..." />
        <button @click="filtrer">Filtrer</button>

        <CardPays v-for="pays in data" :key="pays.cca3" :pays="pays" />
    </div>
</template>
