<template>
    <carousel
      :paginationEnabled="false"
      :perPage="1"
      autoplay
      :autoplayTimeout=6000
      loop
    >
        <slide v-for="(photograph,key) in photographs" :key="key">
            <img
                :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_1240,h_700,c_fill,g_face/https://ctc-members.dk/files/' + photograph"
            >
        </slide>
    </carousel>
</template>
<script>
  export default {
    props:['photographs'],
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
