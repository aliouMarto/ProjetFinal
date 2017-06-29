<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label>Price: </label>
                        <input type="number" class="form-control" v-model="product.price">
                    </div>
                    <div class="form-group">
                        <label>Description: </label>
                        <textarea type="text" class="form-control" v-model="product.description"></textarea>
                    </div>
                    <button class="btn btn-success pull-right" @click="update()" v-show="product.name && product.price && product.description">Mise a jour</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            this.getProduct()
        },
        data(){
            return {
                product: {}
            }
        },
        methods: {
            create() {
                this.$http.post('api/products', this.product)
                    .then(response => {
                        this.$router.push('/feed')
                    })
            },
            getProduct(){
                this.$http.get('api/products/' + this.$route.params.product)
                    .then(response => {
                        this.product = response.body
                    })
            },
            update(){
                this.$http.put('api/products/' + this.$route.params.product, this.product)
                    .then(response => {
                        this.$router.push('/feed')
                    })
            }
        }
    }
</script>

<style>

</style>