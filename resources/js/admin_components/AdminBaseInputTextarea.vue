<template>
    <v-textarea
        :label="label"
        placeholder=" "
        v-model="fieldContent"
        :rows="rows"
    />
</template>
<script>
  export default {
    props:['label','field','rows'],
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
