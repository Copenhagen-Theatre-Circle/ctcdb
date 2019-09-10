<template>
  <div class="white">
    <v-text-field
      label="filter events"
      prepend-inner-icon="search"
      class="pl-3 pr-3"
      v-model="filter"
    ></v-text-field>
    <v-divider class="pt-0"></v-divider>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        filter: '',
      }
    },
  }
</script>
<style scoped></style>
