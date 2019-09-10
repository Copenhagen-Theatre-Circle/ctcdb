<template>
    <v-autocomplete
        :items="items"
        item-value="id"
        item-text="name"
        persistent-hint
        placeholder=" "
        v-model="fieldContent"
        :label="label"
    />
</template>
<script>
  import axios from 'axios'
  export default {
    props:['field','endpoint','label'],
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
