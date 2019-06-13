<template>
    <div class="columns">
        <div class="column is-3">
            <shows-details-contents-sidebar :project="project" />
        </div>
        <div class="column">
            <shows-details-contents-body :project="project" />
        </div>
    </div>
</template>
<script>
  export default {
    props:['project']
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
