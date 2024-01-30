import {createWebHistory, createRouter} from "vue-router";
import FormPage from './components/FormPage.vue';
import ListPage from './components/ListPage.vue';

const routes = [
    { path: '/', name: 'FormPage', component: FormPage },
    { path: '/list', name: 'ListPage', component: ListPage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
