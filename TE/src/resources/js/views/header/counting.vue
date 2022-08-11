<script>
export default {
    name: "count",
};
</script>

<script setup>

import {ref} from 'vue';

let weight = ref(0);
let gender = ref(null);
let result = ref(0);

let carboMin = ref(0);
let carboMax = ref(0);

let fatMin = ref(0);
let fatMax = ref(0);

let proteinMin = ref(0);
let proteinMax = ref(0);

let errorMessage = ref(null);

function countCalories() {
    if (gender.value === 0) {
        result.value = 23 * weight.value;
        countComponents(result.value);
    } else if (gender.value === 1) {
        result.value = 27 * weight.value;
        countComponents(result.value);
    }
    setErrorMessage();
}

function countComponents(caloriesValue) {
    carboMin.value = Math.round(caloriesValue * 0.45 / 4);
    carboMax.value = Math.round(caloriesValue * 0.65 / 4);

    fatMin.value = Math.round(caloriesValue * 0.2 / 9);
    fatMax.value = Math.round(caloriesValue * 0.35 / 9);

    proteinMin.value = Math.round(caloriesValue * 0.1 / 4);
    proteinMax.value = Math.round(caloriesValue * 0.35 / 4);
}

function setErrorMessage() {
    if (gender.value == null || weight.value === 0) {
        errorMessage.value = "Please enter data to count.";
    } else {
        errorMessage.value = null;
    }
}

</script>

<template>
    <ErrorIndex v-if="errorMessage">{{ errorMessage }}</ErrorIndex>
    <div class="card my-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Step one:</b> Please let me know your weight (kg).</li>
            <li class="list-group-item"><input v-model="weight"></li>
        </ul>
    </div>
    <div class="card my-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Step two:</b> I need to know how your body use kcal.</li>
            <li class="list-group-item">
                <input type="radio" id="Man" :value="1" v-model="gender">
                <label for="man">&nbsp;Man</label>
                <br>
                <input type="radio" id="Woman" :value="0" v-model="gender">
                <label for="woman">&nbsp;Woman</label>
            </li>
        </ul>
    </div>
    <div class="card my-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Step three:</b> Please push the button to get result.</li>
            <li class="list-group-item">
                <button type="button" class="btn btn-outline-success" @click="countCalories">Count calories</button>
            </li>
            <li class="list-group-item">
                Your body needs (per day): <b> {{ result }} </b> kcal.<br>
                Carbohydrates must be from 45% till 65%: <b>{{ carboMin }}</b> grams till <b>{{ carboMax }}</b>grams.<br>
                Fats must be from 20% till 35%: <b>{{ fatMin }}</b> grams till <b>{{ fatMax }}</b> grams.<br>
                Proteins must be from 10% till 35%: <b> {{ proteinMin }}</b> grams till <b>{{ proteinMax }}</b> grams.
            </li>
        </ul>
    </div>
</template>

<style scoped>

</style>
