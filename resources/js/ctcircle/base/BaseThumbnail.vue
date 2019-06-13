<template>
    <div class="column is-3">
        <div class="card" :style="image" @click="selectImage()">
        </div>
    </div>
</template>
<script>
  export default {
    props:{
        'filename':{},
        'index': {
            default: 666
        }
    },
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {
        selectImage(){
            eventHub.$emit('select-image', {data: this.index})
        }
    },
    computed: {
        image(){
            return "background: url('https://res.cloudinary.com/ctcircle/image/fetch/h_100/https://ctc-members.dk/files/" + this.filename + "') no-repeat center center; background-size: cover;"
        }
    }
  }
</script>
<style scoped>
    .card{
        min-height: 6rem;
    }
    .card:hover{
        transform: scale(1.03);
    }
    .card{
        transition: all 0.3s ease;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
