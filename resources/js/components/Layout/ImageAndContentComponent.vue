<template>
    <div class="container image-and-content-container py-3">
        <div class="row d-flex justify-content-between">
            <div v-if="position === 'left'" class="col-6 pr-3 d-flex">
                <div>
                    <img :src="imgSrc" :alt="altText" />
                </div>
            </div>
            <div v-if="position === 'left'" class="d-flex flex-column col-6 justify-content-center">
                <h4>
                    {{ title }}
                </h4>
                <slot></slot>
            </div>
            <div v-if="position === 'right'" class="d-flex flex-column col-6 justify-content-center">
                <h4>
                    {{ title }}
                </h4>
                <slot></slot>
            </div>
            <div v-if="position === 'right'" class="col-6 pl-3 d-flex">
                <div>
                    <img :src="imgSrc" :alt="altText" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    date(){
        return {}
    },
    props: {
        position: {
            type: String,
            default: 'left'
        },
        imgSrc: {
            type: String,
            required: true
        },
        altText: {
            type: String,
            default: ''
        },
        title: {
            type: String,
        }
    },
    methods: {}
}
</script>

<style scoped>
.image-and-content-container {

    h4 {
        font-size: 28px;
        font-weight:  700;
    }
}

</style>