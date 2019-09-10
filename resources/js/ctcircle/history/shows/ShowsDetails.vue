<template>
    <base-layout title="History">
        <section class="section">
            <base-breadcrumb>
                <li><a href="/history">History</a></li>
                <li><a href="../shows">Shows</a></li>
                <li class="is-active"><a href="#">{{project.name}}</a></li>
            </base-breadcrumb>
            <hr>
            <shows-details-contents :project="project" />
        </section>
    </base-layout>
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
    .showcontent {
        /*max-height: 350px;
        overflow: scroll !important;*/
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
    section {
      /*background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );*/
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>
