<template>
    <div>
        <div class="menu_burger header">
            <img src="../assets/img_content/logo.png" alt="logo-yalla" />
            <div class="buttons">
                <a href="#">PARRAINAGE</a>
                <router-link class="title_a" to="/don" tag="a">Don</router-link>
                <a href="#" class="btn-menu" id="burger-button" data-state="off">
                    <span class="btn-icon"></span>
                </a>
            </div>
            <div id="burger" >
                <div id="burger-content">
                    <nav id="navigation_menu">
                        <ul>
                            <router-link class="title_a" to="/" @click.native="reload()" tag="li"><a>Acceuil</a></router-link>
                            <router-link class="title_a" to="/articles" tag="li"><a>Articles</a></router-link>
                            <router-link class="title_a" to="/propos" tag="li"><a>A Propos</a></router-link>
                            <router-link class="title_a" to="/don" tag="li"><a>Don</a></router-link>

                            <router-link class="title_a" to="/login" tag="li" v-if="!isAuth"><a>Login</a></router-link>
                            <router-link class="title_a" to="/register" tag="li" v-if="!isAuth"><a>Register</a></router-link>
                            <router-link class="title_a" to="/" tag="li" @click.native="logout()" v-if="isAuth"><a>Logout</a></router-link>
                            <router-link class="title_a" to="/product/create" tag="li" v-if="isAuth"><a>Creer un article</a></router-link>
                            <router-link class="title_a" to="/feed" tag="li" v-if="isAuth"><a>Feed</a></router-link>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isAuth: null,
        }
    },
    created() {
        this.isAuth = this.$auth.isAuthenticated()

        this.setAuthenticatedUser()
    },
    methods: {
        logout() {
            this.$auth.destroyToken();
            this.$router.push("/");
            window.location.reload();
        },
        setAuthenticatedUser() {
            this.$http.get('api/users')
                .then(response => {
                    this.$auth.setAuthenticatedUser(response.body);

                    console.log(this.$auth.getAuthenticatedUser())
                })
        },
        reload() {
            window.location.reload();
        }
    }
}

</script>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    nav {
        position: absolute;
        width: 100%; }

    nav ul li {
        list-style-position: inside;
        list-style-type: none;
        padding: 10px; }

    nav ul {
        margin: 0;
        padding: 0; }

    .title_a {
        font-family: "Brandon Grotesque Black", sans-serif;
        width: auto;
        font-size: 32px;
        text-decoration: none;
        color: #fff;
        border: 0;
        margin: -2px;
        display: block;
        vertical-align: middle;
        height: 68px;
        text-align: center;
        padding: 0;
        position: relative;
        font-weight: 900;
        border-bottom: 0; }

    .title_a:hover {
        color: #F58C8C;
        transition: 0.5s; }


    .header{
        background-color: #fff;
        width: 100%;
        border-bottom: solid 3px #f58b8b;
        height: 70px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        z-index: 3500;
        margin-bottom: 70px;
    }

    .header > img{
        height: 100%;
    }

    .buttons > a{
        height: 100%;
        padding: 0 1em;
        font-size: 1em;
        background-color: white;
        border-bottom: none;
        text-decoration: none;
        color: black;
        display: flex;
        align-items: center;
        font-family: arial;
        font-size: 18px;
    }

    .buttons > a:last-child{
        margin: 0 1em;
        padding: 0px;
    }

    .buttons > a:nth-child(2){
        background-color: #f58b8b;
        border: none;
        color: white;
    }

    .buttons{
        height: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        white-space: nowrap;
        justify-content: space-between;
        align-items: center;
        border: 3px #f58b8b solid;
        border-bottom: none;
    }



    .btn-menu[data-state="on"] .btn-icon::after, .btn-menu[data-state="on"] .btn-icon::before {
        bottom: 0;
        top: 0;
    }

    .btn-menu {
        background: none;
        border: 1px solid black;
        border-radius: 4px;
        color: rgba(0, 0, 0, 0.9);
        cursor: pointer;
        height: 30px;
        padding: 0 8px 0 42px;
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        transition: all .2s .2s;
    }
    .btn-menu:hover {
        background: #eee;
    }
    .btn-menu[data-state="on"] {
        color: transparent;
        min-width: 1px;
        padding-left: 34px;
        padding-right: 0;
        text-indent: -99px;
    }
    .btn-menu[data-state="on"] .btn-icon {
        background: transparent;
    }
    .btn-menu[data-state="on"] .btn-icon::before, .btn-menu[data-state="on"] .btn-icon::after {
        transition: all .2s .2s;
    }
    .btn-menu[data-state="on"] .btn-icon::after {
        transform: rotate(45deg);
    }
    .btn-menu[data-state="on"] .btn-icon::before {
        transform: rotate(-45deg);
    }

    .btn-icon {
        background: black;
        bottom: 0;
        height: 4px;
        left: 0;
        margin: auto 0 auto 4px;
        position: absolute;
        right: 0;
        top: 0;
        transition: .2s all;
        width: 30px;
    }
    .btn-icon::before, .btn-icon::after {
        background: #000;
        border-radius: 4px;
        content: '';
        height: 4px;
        left: 0;
        margin: auto;
        position: absolute;
        transition: all .2s 0s;
        width: 100%;
    }
    .btn-icon::before {
        top: -8px;
    }
    .btn-icon::after {
        bottom: -8px;
    }












    #burger {
        z-index: 3200;
        position: fixed;
        background-color: rgba(245, 140, 140, 0.7);
        width: 110%;
        height: 100%;
        top: 70px;
        right: 0;
        margin: 0;
        padding: 0;
        border: 0;
        transform: translateX(100%);
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transition: transform 1s ease; }

    #burger-content {
        position: relative;
        top: 30%;
        left: 0;
        width: 100%; }

    #burger-button {
        cursor: pointer;
        background-color: #fff;
        border: 1px solid transparent;
        max-width: 35px;
        min-width: 35px;
        top: 0;
        right: 0;
    }

    #burger-overlay.burger-actif {
        display: block; }

    #burger.burger-actif {
        transform: translateX(3%);
        transition: transform 1s ease; }

    .try_opacity {
        width: 40%;
        position: relative;
        left: 30%;
        top: 0;
        height: 300px; }

    article {
        width: 50%;
        left: 0;
        position: absolute;
        height: auto; }

    @media screen and (max-width: 480px) {
        #burger-content {
            position: relative;
            top: 30%;
            left: 0; }

        .title_a {
            font-size: 25px; } }

</style>