<template>
    <div>
        <div v-for="note in notes" :key="note">
            <span :class="{ green: note > 10, red: note <= 10 }">La note est: {{ note }}</span>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notes: [7, 11, 9, 12, 10]
        };
    }
};
</script>

<style>
.green {
    color: green;
}

.red {
    color: red;
}
</style>
