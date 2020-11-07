require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter, VueAxios, Axios);
import Home from './components/Home.vue';
import Account from './components/Account.vue';
import Sites from './components/Sites.vue';
import AddSites from './components/AddSites.vue';
import updateSite from './components/updateSite.vue';

const routes = [{
        name: 'home',
        path: '/admin/home',
        component: Home
    },
    {
        path: '/admin/your-sites',
        component: Sites
    },
    {
        name: 'account',
        path: '/admin/account',
        component: Account
    },
    {
        name: 'addsites',
        path: '/admin/add-sites',
        component: AddSites
    },
    {
        name: 'updatesite',
        path: '/admin/update-sites/:siteid',
        component: updateSite
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});
new Vue(Vue.util.extend({
    router
}, App)).$mount('#App');
