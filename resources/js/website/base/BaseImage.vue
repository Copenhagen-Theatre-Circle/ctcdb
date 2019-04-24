<template>
    <img :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_' + width + '/https://ctc-members.dk/files/' + image">
</template>
<script>
  export default {
    props: {
        width: {
            default: 200
        },
        image: {
            default: ''
        }
    }
  }
</script>
<style scoped></style>
