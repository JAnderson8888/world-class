// resources/js/app.js
import 'bootstrap/dist/css/bootstrap.min.css';

import { createApp } from 'vue';  // Import Vue 3
import ExampleComponent from './components/ExampleComponent.vue';  // Import your Vue component
import Home from './components/HomeComponent.vue';
import { VueGoogleMaps  } from '@fawmi/vue-google-maps';

const app = createApp({});

app.component('example-component', ExampleComponent);  // Register your component
app.component('home', Home);
console.log(VueGoogleMaps)
app.use(VueGoogleMaps , {
    load: {
      key: window.Laravel.GOOGLE_MAPS_API_KEY,
      libraries: 'places', // optional, depending on your needs
    },
  });
app.mount('#app');  // Mount the app to the DOM