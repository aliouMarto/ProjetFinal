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
                    <button class="btn btn-success pull-right" @click="create()" v-show="product.name && product.price && product.description">Create</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

export default {
    data(){
        return {
            product: {
                name: '',
                price: 0,
                description: ''
            }
        }
    },
    http: {
        emulateJSON: true,
        emulateHTTP: true
    },
    methods: {
        create: function() {
            var data = this.product;

            this.$http.post('api/products', {price: 'hello'})
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }


}
}
</script>

<style lang="scss">
    @import '../../assets/css/normalize.css';
    @import '../../assets/css/pater.css';
    @import '../../assets/css/set1.css';
    @import '../../assets/css/style.css';
</style>