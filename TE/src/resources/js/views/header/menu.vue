<script setup>

import SpinnerView from '../partials/spinner';
import {ref, reactive} from "vue";

const state = reactive({
    products: [],
    calories: 0
});

let result = ref(0);
let flour = ref(0);
let fruit = ref(0);
let vegetable = ref(0);
let nut = ref(0);
let spinner = ref(false);
let errorMessage = ref(null);

function getMenu() {

    if (isNaN(result.value)) {
        result.value = 0;
        return errorMessage.value = "Please enter correct data to count.";
    } else {
        state.products = [];
        errorMessage.value = null;
        spinner.value = true;

        let url = './data/menu';
        const requestOptions = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({"kcal": result.value})
        };

        fetch(url, requestOptions)
            .then(response => response.json())
            .then(data => {
                state.products = data.products;
                spinner.value = false;
            });
    }
}
</script>

<template>
    <SpinnerView v-if="spinner"/>
    <ErrorIndex v-if="errorMessage">{{ errorMessage }}</ErrorIndex>
    <div class="card my-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Step one:</b> Please let me know your amount of calories needed per day.</li>
            <li class="list-group-item"><input v-model="result"></li>
        </ul>
    </div>
    <div class="card my-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Step two:</b> Please push the button to get the product list for a week's
                menu.
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-outline-success" @click="getMenu">Manage menu for whole week
                </button>
            </li>
        </ul>
    </div>
    <div>
        <div class="card my-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                    <h5> Below is a list of products in grammes that must be consumed on the specified weekdays to
                        obtain all of the required calories.</h5>
                </li>
            </ul>
        </div>
        <div class="row input-group"
             style="display:flex; width:auto; justify-content: space-evenly; row-gap: 15px;">
            <div class="card text-center" v-for="product in state.products" :key="product.id" style="width: 16vw;">
                <div class="card-body">
                    <h5 class="card-title">{{ product.day }}</h5>
                    <h5 class="card-title">{{ product.name }}</h5>
                    <h5 class="card-title">{{ product.gramms }}</h5>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
