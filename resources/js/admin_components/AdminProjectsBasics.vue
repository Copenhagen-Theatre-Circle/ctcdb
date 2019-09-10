<template>
    <div>
        <admin-base-input-text
          field="name"
          label="Project Name"
        />
    </div>
</template>
<script>
  export default {
    computed: {
      project(){
        return this.$store.state.record
      }
    }
  }
</script>
<style scoped></style>
