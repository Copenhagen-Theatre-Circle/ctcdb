<template>
    <img src="/images/red-badge-transparent-white-border.png" v-on:click="$emit('toggleIntro')" >
</template>
<script>
  export default {
    data() {
      return {
        message: 'hello'
      }
    },
  }
</script>
<style scoped>
    img {
        width: 30%;
        position: fixed; /* or absolute */
        top: 30%;
        left: 35%;
        animation: fade 1s linear;
        cursor: pointer;
    }
    @keyframes fade {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>
