import {createRouter, createWebHistory} from 'vue-router';

import CountingView from '../views/header/counting.vue';
import MenuView from '../views/header/menu.vue';

import AboutView from '../views/footer/about.vue';
import CompanyView from '../views/footer/company.vue';
import WorkView from '../views/footer/work.vue';

const router = createRouter({
    history: createWebHistory('/'),
    routes: [
        {
            path: '/',
            name: 'count',
            component: CountingView
        },
        {
            path: '/menu',
            name: 'menu',
            component: MenuView
        },
        {
            path: '/company',
            name: 'company',
            component: CompanyView
        },
        {
            path: '/work',
            name: 'work',
            component: WorkView
        },
        {
            path: '/about',
            name: 'about',
            component: AboutView
        },
    ]
});

export default router;
