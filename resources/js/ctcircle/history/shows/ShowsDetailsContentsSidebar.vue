<template>
      <div>
          <img
              :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_400/https://ctc-members.dk/files/' + project.photographs.posters[0]"
          >
          <a class="button is-fullwidth is-hidden-mobile" :href="'https://ctc-members.dk/files/' + project.programme.file_name" v-if="project.programme" target="_blank">
            <span class="icon">
              <i class="far fa-file-pdf"></i>
            </span>
            <span>download programme</span>
          </a>
          <br>
          <shows-details-contents-sidebar-infobox :project="project" />
      </div>
</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped>
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
