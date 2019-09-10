<template>
  <div style="padding-top: 120px;">
      <v-alert
          value="true"
          icon="fa-arrow-left"
          color="primary lighten-1"
          outline
          class="ml-5 mr-5 mt-5 elevation-2"
        >
        Please select a record
       </v-alert>
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
