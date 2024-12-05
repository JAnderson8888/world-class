<!-- resources/js/components/ExampleComponent.vue -->
<template>
   <div>
      <h1>Hello from Vue.js!</h1>
      <p>{{ message }}</p>
   </div>
</template>

<script>
export default {
   data() {
      return {
         message: 'This is a Vue component in Laravel!',
      };
   },
};
</script>

<style scoped>
h1 {
   color: #42b983;
}
</style>
