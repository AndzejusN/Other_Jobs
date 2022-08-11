require('./bootstrap');

import { createApp } from 'vue';
import router from './router';
import App from './App.vue';
import { createPinia } from 'pinia';

import ErrorIndex from './components/error/AlertView';
import ConfirmationIndex from './components/confirmation/ConfirmationView';

const app = createApp(App);

app.use(router);
app.use(createPinia());

app.component('ErrorIndex', ErrorIndex);
app.component('ConfirmationIndex', ConfirmationIndex);

app.mount('#app');
