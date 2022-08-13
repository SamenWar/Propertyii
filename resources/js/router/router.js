import { createRouter, createWebHistory } from 'vue-router'

import CompaniesIndex from '../components/landing/add-property'

const routes = [
    {
        path: '/dashboard',
        name: 'companies.index',
        component: CompaniesIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
