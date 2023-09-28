<script setup>
import {useRoute} from "vue-router"
import {onMounted, ref} from "vue";
import axios from "axios";

const route = useRoute()
const id = route.params.id
const data = ref('')

onMounted(async () => {
    const response = await axios.get('https://restcountries.com/v3.1/alpha/' + id)
    data.value = response.data;

})
</script>

<template>
    <main>
        <h1>Ici l'info sur le pays {{ id }}</h1>

        <ul v-for="pays in data">
            <li>{{ pays.name.common }}</li>
            <li><img :src="pays.flags.png" :alt="pays.flags.alt" style="width: 100px"></li>
            <li>{{ pays.capital }}</li>
        </ul>
        <p>Contenu de la page fiche pays, c'est super !</p>

    </main>
</template>
