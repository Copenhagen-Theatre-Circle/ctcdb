<template>
    <v-switch
      v-model="fieldContent"
      :label="label"
      color="primary"
      @change="change"
    />
</template>
<script>
  import axios from 'axios'
  export default {
    props:['label','field'],
    methods: {
        change(){
            this.$emit('change')
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
    }
  }
</script>
