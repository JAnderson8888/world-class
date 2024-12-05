<template>
    <div>
        <header class="d-flex text-white px-3">
            <div class="container d-flex justify-content-end">
                <a href="/careers">
                    Careers
                </a>
            </div>
        </header>
        <nav>
            <div class="d-flex container justify-content-between align-items-center" style="min-height: 100px;">
                <div>
                    Logo
                </div>
                <div class="d-flex links">
                    <a href="/portal" class="mx-2">
                        Cusotomer Portal
                    </a>
                    <a href="/payment" class="mx-2">
                        Make a Payment
                    </a>
                    <a href="/trainers" class="mx-2">
                        Trainers
                    </a>
                    <a href="/shop" class="mx-2">
                        Shop
                    </a>
                    <a href="/about" class="mx-2">
                        About
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="d-flex flex-column align-items-center container title">
        <h1 class="text-center mb-5">
            World Class Athletics
        </h1>
        <div class="text-center mx-5" style="max-width: 700px;">
            Lorem ipsum odor amet, consectetuer adipiscing elit. Etiam himenaeos nostra platea posuere tempus ornare.
            Porttitor metus vivamus egestas, congue maecenas laoreet ridiculus porta fringilla. Nibh vehicula quis ut
            gravida volutpat euismod rhoncus. Praesent risus fusce consectetur etiam aliquet consequat efficitur aptent
            ac. Iaculis neque et dictum erat posuere fringilla neque. Mollis maximus hendrerit sollicitudin nec sed.
            Sociosqu purus nibh magna euismod, varius blandit.
        </div>
    </div>
    <div class="three-image-container container">
        <div class="row">
            <div class="col-4">
                <FaceImage :imgSrc="'/img/front-view-fit-woman-sportswear.jpg'" :title="'Gudided Training'"
                    :content="'Lorem ipsum odor amet, consectetuer adipiscing elit. Vel blandit hac iaculis mus maximus; porttitor molestie.'"
                    :link="'/training'" />
            </div>
            <div class="col-4">
                <FaceImage :imgSrc="'/img/full-shot-man-practicing-yoga.jpg'" :title="'Yoga Classes'"
                    :content="'Lorem ipsum odor amet, consectetuer adipiscing elit. Vel blandit hac iaculis mus maximus; porttitor molestie.'"
                    :link="'/make-an-appointment'" :backgoundPosition="'0px -127px'" />
            </div>
            <div class="col-4">
                <FaceImage :imgSrc="'/img/bison-race-obstacle-race.jpg'" :title="'Crossfit'"
                    :content="'Lorem ipsum odor amet, consectetuer adipiscing elit. Vel blandit hac iaculis mus maximus; porttitor molestie.'"
                    :link="'/make-an-appointment'" :backgoundPosition="'0px -127px'" />
            </div>
        </div>
    </div>
    <ImageAndContent :imgSrc="'/img/people-exercising-fitness-gym.jpg'" :altText="'Book an appointment'"
        :title="'Book an Appointment'">
        Lorem ipsum odor amet, consectetuer adipiscing elit. At inceptos id dictumst nunc inceptos. Ut nec fames ut
        volutpat sit proin. Montes lobortis phasellus, facilisi aenean libero sagittis augue. Etiam vestibulum facilisis
        mattis magnis commodo erat eu. Conubia facilisi tortor cras elit sed.
    </ImageAndContent>
    <ImageAndContent :imgSrc="'/img/weight-training-workout.jpg'" :altText="'Create an account'"
        :title="'Create an Account'" :position="'right'">
        Lorem ipsum odor amet, consectetuer adipiscing elit. At inceptos id dictumst nunc inceptos. Ut nec fames ut
        volutpat sit proin. Montes lobortis phasellus, facilisi aenean libero sagittis augue. Etiam vestibulum facilisis
        mattis magnis commodo erat eu. Conubia facilisi tortor cras elit sed.
    </ImageAndContent>
    <ImageAndContent :imgSrc="'/img/woman-having-rest.jpg'" :altText="'Check out our classes'"
        :title="'Check Out Our Classes'">
        Lorem ipsum odor amet, consectetuer adipiscing elit. At inceptos id dictumst nunc inceptos. Ut nec fames ut
        volutpat sit proin. Montes lobortis phasellus, facilisi aenean libero sagittis augue. Etiam vestibulum facilisis
        mattis magnis commodo erat eu. Conubia facilisi tortor cras elit sed.
    </ImageAndContent>
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <h4>
                    Our Location
                </h4>
                <p>
                    Lorem ipsum odor amet, consectetuer adipiscing elit. Vel rutrum proin aenean vehicula interdum
                    sagittis. Pharetra fermentum condimentum phasellus ex dictum placerat ultrices placerat. Primis
                    convallis facilisis condimentum euismod viverra vivamus.
                </p>
                <p>
                    Condimentum dui tempus semper dapibus magna dis consequat pulvinar! Maximus nisi maecenas cursus
                    torquent laoreet; bibendum felis nullam. Diam porttitor etiam ligula netus commodo lacus. Habitasse
                    metus maximus fermentum netus iaculis. Justo lacus purus sem, litora curabitur mattis hac ante.
                </p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <GoogleMapComponent />
            </div>
        </div>
    </div>
    <ThreeViewCarousel />
</template>

<script>
import FaceImage from "../components/Layout/FaceImageComponent.vue";
import ImageAndContent from "../components/Layout/ImageAndContentComponent.vue";
import GoogleMapComponent from "../components/GoogleMaps/GoogleMapComponent.vue";
import ThreeViewCarousel from "./Carousels/ThreeViewCarousel.vue";

export default {
    data() {
        return {
            name: "Home"
        }
    },
    components: {
        FaceImage,
        ImageAndContent,
        GoogleMapComponent,
        ThreeViewCarousel
    },

}
</script>

<style scoped>
header {
    background-color: black;
}

nav {
    border-bottom: 1px solid black;
    min-height: 100px;
}

.title {
    margin-top: 3rem;
}

h4 {
    font-size: 28px;
    font-weight: 700;
}
</style>