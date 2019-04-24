<template>
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <slot></slot>
      </ul>
    </nav>
</template>
<script>
  export default {
    props: []
  }
</script>
<style scoped>
  .breadcrumb {
    padding-left: 12px;
  }
</style>
