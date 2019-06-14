<template>
    <div>
        <base-thumbnail-gallery
            title="Show Stills"
            :photographs="person.photographs.show_stills"
            v-if="person.photographs.show_stills"
            gallerynr="1"
        />
        <base-thumbnail-gallery
            title="Behind the Scenes"
            :photographs="person.photographs.behind_the_scenes"
            v-if="person.photographs.behind_the_scenes"
            gallerynr="2"
        />
        <base-thumbnail-gallery
            title="Portraits"
            :photographs="person.photographs.portraits"
            v-if="person.photographs.portraits"
            gallerynr="3"
        />
        <base-thumbnail-gallery
            title="Promo Pics"
            :photographs="person.photographs.promo_pics"
            v-if="person.photographs.promo_pics"
            gallerynr="4"
        />
    </div>
</template>
<script>
  export default {
    props:['person'],
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
