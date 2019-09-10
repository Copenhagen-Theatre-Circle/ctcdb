<template>
  <carousel
    :perPage=1
    autoplay
    :autoplayTimeout=10000
    loop
    :navigationEnabled="!isTouch"
    :paginationEnabled="false"
    paginationActiveColor="#d10f22"
    >
    <slide v-for="(item,key) in items" :key="key">
      <base-carousel-card :item="item"></base-carousel-card>
    </slide>
  </carousel>
</template>

<script>
    export default{
        data(){
            return{
                selection:0,
                items:[
                    {
                        image:'baskerville.jpg',
                        title: 'Baskerville: A Sherlock Holmes Mystery',
                        description: 'Ken Ludwig’s witty adaptation of the beloved classic transforms Arthur Conan Doyle’s story into a murderously funny adventure that will have you roaring with laughter!'
                    },
                    {
                        image:'beauty_beast_rose.jpg',
                        title: 'Auditions for 2020 Panto: Beauty and the Beast',
                        description: 'We are looking for actors of all ages with a sense of fun who enjoy high-energy theatre, singing, dancing, audience participation and even some cross-dressing! Even if you’ve never tried singing or dancing on stage, we’re looking for all types of talent.'
                    },
                    {
                        image:'open_stage_web_header.jpg',
                        title: 'Open Stage, Friday, September 20th 2019',
                        description: 'Copenhagen Theatre Circle’s Open Stage event welcomes performers of all genres: poets, storytellers, stand-up comedians, singers, dancers, clowns, musicians, magicians, etc. etc. A call to artists old and new: this is the space you have been looking for to try out your work in front of an energetic and supportive audience.'
                    }
                ]
            }
        },
        computed:{
            isTouch(){
               return window.matchMedia('screen and (max-width: 768px)').matches
            },
            screenWidth(){
              return screen.width
            }
        },
        methods: {
          selectNext(){
            this.selection++
          }
        }
    }
</script>

<style>
  .VueCarousel-navigation-button {
    background-color: #eee !important;
    font-size: 1rem;
  }
  .VueCarousel-navigation-prev {
    margin-left: 25px;
  }
  .VueCarousel-navigation-next {
    margin-right: 25px;
  }
  .VueCarousel-dot {
    margin-top: 0px !important;
  }
</style>
