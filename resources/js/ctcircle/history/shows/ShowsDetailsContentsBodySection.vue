<template>
    <div :id="title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')">
        <hr>
        <h1 class="subtitle is-size-3">{{title}}</h1>
        <slot></slot>
    </div>
</template>
<script>
  export default {
    props:['title']
  }
</script>
<style scoped>
    div {
        padding-bottom: 1rem;
        padding-top: 80px;
        margin-top: -80px;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
        margin: 12px 0px;
    }
</style>
