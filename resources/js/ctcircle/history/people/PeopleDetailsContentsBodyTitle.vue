<template>
  <div>
    <div v-if="person.phototags.length>0">
      <!-- Carousel -->
      <people-details-carousel :phototags="person.phototags" />
      <div class="titlecard">
      <!-- Carousel -->
        <h1 class="subtitle is-1">{{person.first_name}} {{person.last_name}}</h1>
      </div>
    </div>
    <div v-else>
        <h1 class="subtitle is-1">{{person.first_name}} {{person.last_name}}</h1>
    </div>
  </div>

</template>
<script>
  export default {
    props:['person']
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
