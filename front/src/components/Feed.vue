<template>
    <div>
        <products></products>
    </div>
</template>

<script>
    import Products from './product/Products.vue';

    export default {
        components: {
            'products': Products
        }
    }
</script>