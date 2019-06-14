<template>
    <ctcdb-base-layout title="History">
        <section class="section">
            <base-breadcrumb>
                <li><a href="../people">People</a></li>
                <li class="is-active"><a href="#">{{person.first_name}} {{person.last_name}}</a></li>
            </base-breadcrumb>
            <hr>
            <people-details-contents :person="person" />
        </section>
    </ctcdb-base-layout>
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
        margin-bottom: 40px;
        background-color: white;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
