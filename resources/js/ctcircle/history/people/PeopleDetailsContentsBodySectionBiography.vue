<template>
  <div
    v-html="person.public_bio"
    style="white-space: pre-wrap;"
  ></div>
</template>
<script>
  export default {
    props:['person']
  }
</script>
<style scoped>
  .synopsis{
    padding-bottom: 1rem;
  }
  h1{
    margin-top: 0.6rem !important;
    margin-bottom: 0.6rem !important;
  }
</style>
