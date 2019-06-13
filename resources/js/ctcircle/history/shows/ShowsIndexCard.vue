<template>
    <div class="column is-one-fifth">
        <slot name="year"></slot>
        <div class="poster">
            <slot></slot>
        </div>
    </div>
</template>
<script>
  export default {
    props:['title','image'],
  }
</script>
<style scoped>
    .poster:hover {
      transform: scale(1.05) !important;
    }
    .poster {
      transition: all 0.5s ease;
      cursor: pointer;
      will-change: transform;
    }
</style>
