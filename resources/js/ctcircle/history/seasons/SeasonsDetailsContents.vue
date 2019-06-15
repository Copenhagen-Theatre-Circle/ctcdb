<template>
    <div class="columns">
        <div class="column is-3">
            <seasons-details-contents-sidebar :season="season" />
        </div>
        <div class="column">
            <seasons-details-contents-body :season="season" />
        </div>
    </div>
</template>
<script>
  export default {
    props:['season']
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
