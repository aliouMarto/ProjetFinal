<template>
    <div class="row">
        <product  class="prout" v-for="product in products" @delete-article="deleteArticle(product)" :key="product.id" :product="product" :authenticatedUser="authenticatedUser">

        </product>
    </div>
</template>

<script>
    import swal from 'sweetalert';
    import Product from './Product.vue'

    export default {
        data() {
            return {
                products: [],
                authenticatedUser: this.$auth.getAuthenticatedUser()
                }

        },
        components: {
            'product': Product
        },
        computed: {
        },
        created() {
            this.$http.get('api/products')
                .then(response => {
                    this.products = response.body
                })
        },
        mounted(){
            this.$auth.getAuthenticatedUser()
        },
        methods: {
            getAuthenticatedUser() {
                this.$http.get('api/users')
                    .then(response => {
                        this.$auth.setAuthenticatedUser(response.body);

                        console.log(this.$auth.getAuthenticatedUser())
                    })
            },
            deleteArticle(product) {
                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this article !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm){
                        if (isConfirm) {
                            this.$http.delete('api/products/' + product.id )
                                .then(response =>{
                                    let index = this.products.indexOf(product);
                                    this.products.splice(index, 1)
                                })
                            swal("Deleted!", "Your article deleted.", "success");
                        } else {
                            swal("Cancelled", "Your article is safe :)", "error");
                        }
                    }.bind(this));
            }
        }
    }
</script>

<style>
    .prout {
        margin: 20px;
    }
</style>