<template>
  <div class="is-hidden-mobile">
    <div v-if="project.photographs['show_stills']">
      <!-- Carousel -->
      <shows-details-carousel :photographs="project.photographs['show_stills']" />
      <div class="titlecard">
      <!-- Carousel -->
        <h1 class="subtitle is-1" v-if="project.name.length<20">{{project.name}}</h1>
        <h1 class="subtitle is-2" v-else >{{project.name}}</h1>
        <h3 class="subtitle is-4" v-if="project.directors">directed by {{project.directors}}</h3>
      </div>
    </div>
    <div v-else>
        <h1 class="subtitle is-1">{{project.name}}</h1>
    </div>
    <hr>
  </div>

</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped lang="scss">
    .titlecard {
        margin-top: -150px;
        margin-bottom: 10px;
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
        .is-2{
          margin-bottom: 0.9rem;
        }
    }
    hr {
        background-color: lightgrey;
        height: 1px;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
</style>
