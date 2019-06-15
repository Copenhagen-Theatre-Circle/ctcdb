<template>
    <div>
        <!-- Mobile only -->
        <div class="is-hidden-tablet">
            <ctcdb-navbar-short/>
        </div>
        <!-- Tablet and up -->
        <div class="is-hidden-mobile">
            <ctcdb-navbar-short-scrolling/>
            <ctcdb-navbar-tall/>
        </div>
    </div>
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
<style scoped></style>
