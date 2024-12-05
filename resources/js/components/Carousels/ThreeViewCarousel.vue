<template>
    <div class="container">
        <div class="row carousel-container d-flex align-items-center">
            <div class="col-1 d-flex align-items-center jusitfy-content-center">
                <
            </div>
            <div class="col-3 carousel-item-container left-container d-flex justify-content-center align-items-center" style="flex: 0.8">

            </div>
            <div class="col-4 carousel-item-container main-container d-flex justify-content-center align-items-center" style="flex: 1.4"></div>
            <div class="col-3 carousel-item-container right-container d-flex justify-content-center align-items-center" style="flex: 0.8"></div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            indexes: [],
            testimonials: []
        }
    },
    props: {},
    methods: {},
    mounted() {}
}
</script>

<style scoped>

.carousel-container {
    height: 255px;
    width: 100vw;

    .carousel-item-container {
        border: 1px solid black;
    }

    .main-container {
        height: 100%;
    }

    .left-container,
    .right-container {
        height: 75%;
    }
}

</style>