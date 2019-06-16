<template>
      <div>
          <img
            v-if="person.portraits && isStaging"
            :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_400/https://ctc-members.dk/media/' + person.portraits.file_name"
          >
      </div>
</template>
<script>
  export default {
    props:['person'],
    computed: {
        isStaging(){
            return document.URL.includes("staging")
        }
    },
  }
</script>
<style scoped>
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
