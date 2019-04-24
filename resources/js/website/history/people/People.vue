<template>
    <base-layout title="History">
        <section class="section">
          <br>
          <history-tabs activeTab="people"></history-tabs>
        </section>
    </base-layout>
</template>
<script>
  export default {
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    section {
      background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>
