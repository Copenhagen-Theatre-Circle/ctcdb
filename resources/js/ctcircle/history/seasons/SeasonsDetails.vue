<template>
    <base-layout title="History">
        <section class="section">
            <base-breadcrumb>
                <li><a href="/history">History</a></li>
                <li><a href="../seasons">Seasons</a></li>
                <li class="is-active"><a href="#">{{season.year_start}}/{{season.year_start+1}}</a></li>
            </base-breadcrumb>
            <hr>
            <seasons-details-contents :season="season" />
        </section>
    </base-layout>
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
        margin-bottom: 40px;
        background-color: white;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
