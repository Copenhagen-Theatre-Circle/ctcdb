<template>
    <img :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_' + width + portrait_parameters + '/https://ctc-members.dk/'+ directory + '/' + image">
</template>
<script>
  export default {
    props: {
        width: {
            default: 200
        },
        image: {
            default: ''
        },
        directory: {
            default: 'files'
        },
        portrait: {
            default: false
        }
    },
    computed: {
        portrait_parameters(){
            if (this.portrait) {
                return ',h_' + this.width + ',c_thumb,g_face,z_0.8'
            } else {
                return ''
            }
        }
    }
  }
</script>
<style scoped></style>
