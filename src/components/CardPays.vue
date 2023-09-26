<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const redirectToPays = (id) => {
    router.push({ name: 'fiche-pays', params: { id } })
}
</script>

<template>
    <div @click="redirectToPays(pays.cca3)">
        <img :src="pays.flags.png" alt="Drapeau du pays" />
        <h2>{{ pays.name.common }}</h2>
    </div>
</template>

<script>
export default {
    props: {
        pays: {
            type: Object,
            required: true
        }
    }
};
</script>

<style scoped>
.card-pays {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
}
</style>


