<template>
  <a
    :href="route"
    class="navbar-item"
    :class="{'is-underlined': route.split('/')[1]==activeLink}"
  >
    {{title}}
  </a>
</template>
<script>
  export default {
    props: ['title','route'],
    data() {
      return {
        activeLink: $(location).attr('pathname').split('/')[1],
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    .is-underlined {
        border-bottom: #d10f22 solid 3px;
      }
</style>
