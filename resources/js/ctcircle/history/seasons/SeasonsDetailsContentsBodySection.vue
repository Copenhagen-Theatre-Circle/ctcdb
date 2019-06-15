<template>
    <div :id="title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')">
        <hr>

        <h1 class="subtitle is-size-3">
<!--             <span class="caret" @click="open=!open" v-if="open"><i class="fas fa-caret-down is-size-6"></i></span>
            <span class="caret" @click="open=!open"  v-else><i class="fas fa-caret-right is-size-6"></i></span> -->
            {{title}}
            <a href="#" class="back-to-top is-size-7" data-turbolinks="false">back&nbsp;to&nbsp;top</a>
        </h1>
        <slot v-if="open"></slot>
    </div>
</template>
<script>
  export default {
    props:['title'],
    data() {
      return {
        open: true
      }
    }
  }
</script>
<style scoped>
    div {
        /*padding-bottom: 1rem;*/
        padding-top: 80px;
        margin-top: -80px;
    }
    hr {
        background-color: lightgrey;
        height: 1px;
        margin: 12px 0px 24px 0px;
    }
    h1 {
        margin-bottom: 0.6rem !important;
    }
    .caret {
        display:none;
        /*margin-left: -1.2rem;*/
        color: #f9aeb5;
    }
    .back-to-top{
        margin-left: 0.6rem;
        /*color: #f9aeb5;*/
    }
</style>
