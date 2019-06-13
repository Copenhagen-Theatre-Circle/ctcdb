<template>
      <div>
          <img
              :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_400/https://ctc-members.dk/files/' + project.photographs.posters[0]"
          >
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
