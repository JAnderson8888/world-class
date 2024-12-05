<template>
    <section class="d-flex rounded flex-column align-items-center justify-content-between face-image" :style="{ backgroundImage: 'url(' + imgSrc + ')', backgroundPosition: backgoundPosition }">
        <h4 className="mt-3 text-white">
            {{ title }}
        </h4>
        <footer class="d-flex flex-column justify-content-center text-center text-white">
            <span>
                {{ content }}
            </span>
            <button class="py-3" @click="handleClick()">
                Learn More
            </button>
        </footer>
    </section>
</template>

<script>
export default {
    data() {
        return {
            name: "Face Image",
        }
    },
    props: {
        imgSrc: {
            type: String,
            required: true
        },
        title: {
            type: String,
            required: true
        },
        content: {
            type: String,
            required: true
        },
        link: {
            type: String,
            required: true
        },
        backgoundPosition: {
            type: String,
            default: '0px 0px'
        }
    },
    methods: {
        handleClick() {
            window.history.push(this.link)
        }
    }
}
</script>

<style scoped>
.face-image {
    height: 390px;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    
    footer {
        position: relative;
        bottom: 0;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(1,1,20,0.15730042016806722) 100%);
    }

    button {
        width: 100%;
        border-bottom-left-radius: 0.375rem;
        border-bottom-right-radius: 0.375rem;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(1,1,20,0.15730042016806722) 100%);
        font-size: 20px;
        font-weight: 500;
    }
}

</style>