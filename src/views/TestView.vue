<template>
    <div>
        <button @click="awesome = !awesome">Basculer</button>

        <h1 v-if="awesome">Vue est magnifique!</h1>
        <h1 v-else>Oh non 😢</h1>
    </div>
    <div>
        <div v-for="note in notes" :key="note">
            <span v-if="note > 10">La note {{ note }} est supérieure à 10.</span>
            <span v-else>La note {{ note }} est inférieure ou égale à 10.</span>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            awesome: true,
            notes: [7, 11, 9, 12, 10]
        };
    }
};
</script>

