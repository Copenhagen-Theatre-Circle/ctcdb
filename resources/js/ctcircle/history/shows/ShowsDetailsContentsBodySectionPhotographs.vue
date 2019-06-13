<template>
    <div>
        <base-thumbnail-gallery
            title="Show Stills"
            :photographs="project.photographs.show_stills"
            v-if="project.photographs.show_stills"
            gallerynr="1"
        />
        <base-thumbnail-gallery
            title="Behind the Scenes"
            :photographs="project.photographs.behind_the_scenes"
            v-if="project.photographs.behind_the_scenes"
            gallerynr="2"
        />
    </div>

</template>
<script>
  export default {
    props:['project'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped></style>
