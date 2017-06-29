<template>
        <div class="col-lg-4 col-sm-1 article">
            <div class="thumbnail">
                <img src="https://s-media-cache-ak0.pinimg.com/736x/d2/df/52/d2df52013a4d9a76b7f979f04fb07bad.jpg" alt="">
                <div>
                    <h3>{{ product.name }}</h3>
                    <p>{{ product.description }}</p>
                </div>
            </div>
        </div>


</template>

<script>

    export default {
        props: ['product'],

    }
</script>

<style>
    .article{
        display: flex;
        flex-wrap: wrap;
    }
</style>