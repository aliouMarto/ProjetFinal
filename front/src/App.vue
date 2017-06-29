<template>
  <div class="">
    <navbar class="content-fluid" style="width: 100%"></navbar>


    <router-view class="row" style="padding-top: 100px"></router-view>
  </div>

</template>

<script>
    import Navbar from './components/NANA.vue'
    import Login from './components/authentification/Login.vue'
    import Register from './components/authentification/Register.vue'
    import axios from 'axios'

    export default {
        components: {
            'navbar': Navbar,
            'login': Login,
            'register': Register
        }
}

</script>

<style lang="scss">
  .routeApp {
    margin-top: 70px;
  }
</style>
