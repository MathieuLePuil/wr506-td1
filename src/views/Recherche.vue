<template>
    <div>
        <input v-model="query" @input="searchCountries" placeholder="Rechercher un pays..." />
        <div v-for="country in countries" :key="country.cca3">
            {{ country.name.common }}
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const query = ref('');
const countries = ref([]);

const searchCountries = async () => {
    if (query.value) {
        const response = await fetch(`https://restcountries.com/v3.1/name/${query.value}`);
        countries.value = await response.json();
    } else {
        countries.value = [];
    }
};
</script>
