<template>
    <div class="col-md-4 taille">
        <div class="thumbnail">
            <img src="https://s-media-cache-ak0.pinimg.com/736x/d2/df/52/d2df52013a4d9a76b7f979f04fb07bad.jpg" alt="">
            <div class="caption">
                <h3>{{ product.name }}</h3>
                <p>{{ product.price }}</p>
                <hr>
                <p>
                    <a href="#" class="btn btn-default">Wish list</a>
                    <a href="#" class="btn btn-success">Buy</a>
                </p>
                <hr>
                <p>
                    <a href="#" class="btn btn-danger" role="button" @click="$emit('delete-article')">Delete</a>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product', 'authenticatedUser'],


    }
</script>

<style>
    .taille {
        margin-top: 100px;
    }
</style>