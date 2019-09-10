<template>
    <v-select
        :items="items"
        item-value="id"
        item-text="name"
        placeholder=" "
        v-model="fieldContent"
        :label="label"
    ></v-select>
</template>
<script>
  import axios from 'axios'
  export default {
    props:['endpoint','label','field'],
    data() {
      return {
        items: null
      }
    },
    computed: {
      fieldContent: {
        get () {
          return this.$store.state.record[this.field]
        },
        set (value) {
          this.$store.dispatch('updateRecord', [this.field,value])
        }
      }
    },
    created() {
      axios
        .get('/admin-api/' + this.endpoint)
        .then(response => (this.items = response.data))
    }
  }
</script>
