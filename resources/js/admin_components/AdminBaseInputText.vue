<template>
    <v-text-field
        :label="label"
        placeholder=" "
        v-model="fieldContent"
    />
</template>
<script>
  export default {
    props:['label','field'],
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
