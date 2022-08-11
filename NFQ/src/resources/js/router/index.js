import {createRouter, createWebHistory} from 'vue-router';

import StatusIdView from '../views/header/StatusIdView.vue';
import ProjectView from '../views/header/ProjectView.vue';

import AboutView from '../views/footer/AboutView.vue';
import CompanyView from '../views/footer/CompanyView.vue';
import WorkView from '../views/footer/WorkView.vue';

const router = createRouter({
    history: createWebHistory('/'),
    routes: [
        {
            path: '/',
            name: 'index',
            component: ProjectView
        },
        {
            path: '/status/:id',
            name: 'statusid',
            component: StatusIdView,
            props: true
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
