<template>
    <div class="pl-5 grey lighten-3">
      <v-tabs class="pt-2" slider-color="primary" color="grey lighten-3">
        <v-tab v-for="tab, key in tabs" :key="key" @click="$emit('selectComponent', tab.component)">{{tab.name}}</v-tab>
      </v-tabs>
    </div>
</template>
<script>
  export default {
    props:['tabs'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {
        alert(){
            alert('change');
        }
    }
  }
</script>
<style scoped></style>
