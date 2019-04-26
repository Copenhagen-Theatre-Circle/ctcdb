<template>
    <div class="tabs is-fullwidth">
      <ul>
        <li :class="{'is-active': activeTab=='shows'}">
          <a href="shows" class="has-text-white">
            <span class="icon is-small"><i class="fas fa-theater-masks" aria-hidden="true"></i></span>
            <span>Shows</span>
          </a>
        </li>
        <li :class="{'is-active': activeTab=='people'}">
          <a href="people" class="has-text-white">
            <span class="icon is-small"><i class="far fa-user-circle" aria-hidden="true"></i></span>
            <span>People</span>
          </a>
        </li>
        <li :class="{'is-active': activeTab=='seasons'}">
          <a href="seasons" class="has-text-white">
            <span class="icon is-small"><i class="fas fa-calendar" aria-hidden="true"></i></span>
            <span>Seasons</span>
          </a>
        </li>
      </ul>
    </div>
</template>
<script>
  export default {
    props: ['activeTab'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    a {
      font-size: 1.2rem;
    }
    li>a:hover {
        /*color: #c42926 !important;*/
        border-bottom-color: #c42926 !important;
    }
    .is-active>a {
        color: #c42926 !important;
        font-weight: 600;
    }
    .is-active>a:hover {
        color: #c42926 !important;
        font-weight: 600;
    }
</style>
