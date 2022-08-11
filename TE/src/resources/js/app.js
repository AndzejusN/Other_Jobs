require('./bootstrap');

import { createApp } from 'vue';

import router from './router';

import App from './App.vue';

const app = createApp(App);

import ErrorIndex from './views/components/error/alert';

app.use(router);

app.component('ErrorIndex', ErrorIndex);

app.mount('#app');
