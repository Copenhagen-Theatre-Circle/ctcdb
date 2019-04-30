<template>
  <div class="column" :class="'is-'+size">
      <b-tooltip
          :label="tooltip"
          position="is-bottom"
          type="is-primary"
          multilined
          >
        <a class="box has-text-centered" :href="'/members/'+ href">
          <i :class="'button-icon fas fa-' + icon + ' fa-4x'"></i>
          <br>
          <span class="is-size-5">{{title}}</span>
        </a>
      </b-tooltip>
    </div>
</template>
<script>
  export default {
    props:['title','icon','size','tooltip','href'],
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
    .column {
      padding: 30px;
    }
    .fas {
        color: #d10f22;
    }
    .button-icon {
        margin-bottom: 0.7rem;
    }
    .box:hover {
        transform: scale(1.05) !important;
      }
    .box {
      transition: all 0.5s ease;
      cursor: pointer;
      will-change: transform;
    }
    .b-tooltip, .box {
      width: 100%;
    }
</style>
