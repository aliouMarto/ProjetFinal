import Vue from 'vue'
import App from './App.vue'
import Router from './routes'
import VueResource from 'vue-resource'
import axios from 'axios'

import Auth from './packages/auth/Auth'

Vue.use(VueResource);
Vue.use(axios);
Vue.use(Auth);

Vue.http.options.root = 'http://localhost:8000/';
Vue.http.headers.common['Authorization'] = 'Bearer ' + Vue.auth.getToken();

Router.beforeEach(
    (to, from, next) => {
      if ( to.matched.some(record => record.meta.forVisitors)){
        if ( Vue.auth.isAuthenticated()){
          next({
              path: '/feed'
          })
        }else next()
      }
      else if ( to.matched.some(record => record.meta.forAuth)){
        if ( !Vue.auth.isAuthenticated()){
            next({
                path: '/login'
            })
        }else next()
    }else next()
    }
)
new Vue({
  el: '#app',
  render: h => h(App),
    router: Router
});
