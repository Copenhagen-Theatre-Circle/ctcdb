<template>
    <carousel
      :paginationEnabled="false"
      :perPage="1"
      autoplay
      :autoplayTimeout=6000
      loop
    >
        <slide v-for="(phototag,key) in phototags" :key="key">
            <img
                :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_1240,h_700,c_fill,g_face/https://ctc-members.dk/files/' + phototag.photograph.file_name"
            >
        </slide>
    </carousel>
</template>
<script>
  export default {
    props:['phototags'],
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
