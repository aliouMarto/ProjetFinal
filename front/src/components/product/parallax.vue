<template>

        <img src="../../assets/img_content/2.jpg" alt="very cool bg">

</template>

<script>
    export default {
        props: {
            parallax: {
                default: true,
                type: Boolean
            },
            speedFactor: {
                default: 0.15,
                type: Number
            },
            fixed: {
                default: false,
                type: Boolean
            },
            breakpoint: {
                default: '(min-width: 968px)',
                type: String
            },
            sectionHeight: {
                default: 70,
                type: Number,
                required: false
            },
            sectionClass: {
                type: String,
                default: 'Masthead'
            },
            containerClass: {
                type: String,
                default: 'Masthead__image'
            },
            parallaxClass: {
                type: String,
                default: 'is-parallax'
            },
            fixedClass: {
                type: String,
                default: 'is-fixed'
            },
            direction: {
                type: String,
                default: 'up'
            }
        },
    }
</script>