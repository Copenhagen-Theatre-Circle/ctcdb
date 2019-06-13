<template>
    <div>
        <h1 class="subtitle is-size-4">{{title}}</h1>
        <vue-gallery :images="photos" :index="index" @close="index = null" :id="'blueimp-gallery-'+gallerynr"></vue-gallery>
        <img
          v-for="(photograph,key) in photos"
          :src="photograph"
          @click="index = key"
        >
    </div>
</template>
<script>
  export default {
    props:['photographs','title','gallerynr'],
    data() {
      return {
        index: null
      }
    },
    computed: {
      photos(){
        var arr = this.photographs
        var prefix = 'https://res.cloudinary.com/ctcircle/image/fetch/h_1200/https://ctc-members.dk/files/'
        for(var i=0;i<arr.length;i++){
            arr[i]=prefix+arr[i]
        }
        return arr
      }
    }
  }
</script>
<style scoped>
  img{
    max-width: 200px;
    max-height: 100px;
    padding-right: 0.5rem;
    transition: all 0.3s ease;
    /*border-radius: 4px;*/
    cursor: pointer;
  }
  img:hover{
    transform: scale(1.03);
  }
</style>
