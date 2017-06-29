import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home.vue';
import Login from './components/authentification/Login.vue';
import Register from './components/authentification/Register.vue';
import Create from './components/product/Create.vue';
import Feed from './components/Feed.vue';
import Edit from './components/product/Edit.vue';
import Articles from './components/Article.vue';
import Propos from './components/Propos.vue';
import Don from './components/Don.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    routes:[
        {
            path:"/",
            component: Home,
        },
        {
            path:"/login",
            component: Login,
            meta: {
                forVisitors: true
            }
        },
        {
            path:"/register",
            component: Register,
            meta: {
                forVisitors: true
            }
        },
        {
            path:"/feed",
            component: Feed,
            meta: {
                forAuth: true
            }
        },
        {
            path:"/product/create",
            component: Create,
            meta: {
                forAuth: true
            }
        },
        {
            path:"/product/:product/edit",
            component: Edit,
            meta: {
                forAuth: true
            }
        },
        {
            path:"/articles",
            component: Articles,
        },
        {
            path:"/propos",
            component: Propos,
        },
        {
            path:"/don",
            component: Don,
        }


    ],
    linkActiveClass: 'active',
    mode: 'history'
});

export default router