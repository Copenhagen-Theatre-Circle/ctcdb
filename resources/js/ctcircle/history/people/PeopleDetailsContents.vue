<template>
    <div class="columns">
        <div class="column is-3">
            <people-details-contents-sidebar :person="person" />
        </div>
        <div class="column">
            <people-details-contents-body :person="person" />
        </div>
    </div>
</template>
<script>
  export default {
    props:['person']
  }
</script>
<style scoped>
    .section {
        margin-top: 10px;
        padding-top: 20px;
        padding-bottom: 350px;
        margin-bottom: 40px;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
