<template>
    <div class="tabs is-fullwidth">
      <ul>
        <li :class="{'is-active': activeTab==1}">
          <a @click="$emit('selectTab',1)">
            <span class="icon is-small"><i class="fas fa-theater-masks" aria-hidden="true"></i></span>
            <span>What We Do</span>
          </a>
        </li>
        <li :class="{'is-active': activeTab==2}">
          <a @click="$emit('selectTab',2)">
            <span class="icon is-small"><i class="far fa-user-circle" aria-hidden="true"></i></span>
            <span>How We Work</span>
          </a>
        </li>
        <li :class="{'is-active': activeTab==3}">
          <a @click="$emit('selectTab',3)">
            <span class="icon is-small"><i class="fas fa-calendar" aria-hidden="true"></i></span>
            <span>How To Participate!</span>
          </a>
        </li>
      </ul>
    </div>
</template>
<script>
  export default {
    props: ['activeTab']
  }
</script>
<style scoped>
  .tabs {
    margin-top: 0.5rem;
    margin-bottom: 1.5rem;
  }
/*    a {
      font-size: 1.2rem;
    }*/
/*    li>a:hover {
        border-bottom-color: #c42926 !important;
    }*/
/*    .is-active>a {
        color: #c42926 !important;
        font-weight: 600;
    }
    .is-active>a:hover {
        color: #c42926 !important;
        font-weight: 600;
    }*/
</style>
