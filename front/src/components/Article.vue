<template>
    <div class="row">
        <homepage class="homepage" v-for="product in products" :key="product.id" :product="product">

        </homepage>
    </div>
</template>

<script>
    import Homepage from './product/Homepage.vue'

    export default {
        data() {
            return {
                products: [],
            }
        },
        components: {
            'homepage': Homepage
        },
        created() {
            this.$http.get('api/products')
                .then(response => {
                    this.products = response.body
                })
        },
    }
</script>

<style>
    .homepage {
        display: flex;
        flex-wrap: wrap;
    }
</style>