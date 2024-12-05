<!-- GoogleMapComponent.vue -->
<template>
    <div ref="mapContainer" class="map-container"></div>
</template>

<script>
export default {
    data() {
        return {
            map: null,
            mapOptions: {
                center: { lat: 40.7128, lng: -74.0060 }, // Default to New York
                zoom: 12, // Zoom level
            }
        };
    },
    mounted() {
        // Dynamically construct the Google Maps script URL
        if (typeof window.goolge === "undefined") {
            this.loadGoogleMapsScript()
                .then(() => {
                    this.initializeMap();
                })
                .catch((error) => {
                    console.error("Error loading Google Maps API:", error);
                })
        } else {
            this.initializeMap();
        }
    },
    methods: {
        // Initialize the map once the script is loaded
        loadGoogleMapsScript() {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = `https://maps.googleapis.com/maps/api/js?key=${window.Laravel.GOOGLE_MAPS_API_KEY}&libraries=places`;
                script.async = true;
                script.onload = () => resolve();
                script.onerror = (error) => reject(error);
                document.head.appendChild(script);
            });
        },

        initializeMap() {
            // Use the Google Maps API to create the map
            const mapElement = this.$refs.mapContainer;
            this.map = new google.maps.Map(mapElement, this.mapOptions);

            // Add a marker (optional)
            new google.maps.Marker({
                position: this.mapOptions.center,
                map: this.map,
                title: 'San Francisco',
            });
        },
    }
}
</script>

<style scoped>
    .map-container {
        height: 100%;
        width: 100%;
    }
</style>