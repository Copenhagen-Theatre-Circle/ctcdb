<template>
  <div>
    <div>
        <h1 class="subtitle is-1">Season #{{season.year_start - 1967}}: {{season.year_start}}/{{season.year_start + 1}}</h1>
    </div>
  </div>

</template>
<script>
  export default {
    props:['season']
  }
</script>
<style scoped lang="scss">
    .titlecard {
        margin-top: -130px;
        margin-bottom: 50px;
        position: relative;
        background: linear-gradient( rgba(120, 120, 120, 0.7), rgba(120, 120, 120, 0.7) );
        color: white !important;
        padding: 1rem;
        h1, h3 {
          color: white;
        }
        .is-1{
          margin-bottom: 0.3rem;
        }
    }
</style>
