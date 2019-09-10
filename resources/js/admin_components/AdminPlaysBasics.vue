<template>
    <div>
        <admin-base-input-text
          field="title"
          label="Play Title"
        />
    </div>
</template>
<script>
  export default {
    computed: {
      play(){
        return this.$store.state.record
      }
    },
  }
</script>
<style scoped></style>
