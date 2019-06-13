<template>
    <ctcdb-base-layout title="History">
        <section class="section">
            <base-breadcrumb>
                <li><a href="../shows">Shows</a></li>
                <li class="is-active"><a href="#">{{project.name}}</a></li>
            </base-breadcrumb>
            <hr>
            <shows-details-contents :project="project" />
        </section>
    </ctcdb-base-layout>
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
        margin-bottom: 40px;
        background-color: white;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
