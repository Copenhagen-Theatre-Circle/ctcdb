<template>
  <carousel
    :perPage=1
    autoplay
    :autoplayTimeout=10000
    loop
    :navigationEnabled="!isTouch"
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
                        image:'inspector-banner.png',
                        title: 'An Inspector Calls',
                        description: 'Filled with twists, turns and gasps, CTC’s adaptation of J.B. Priestley’s An Inspector Calls will leave you guessing until the very last moment…'
                    },
                    {
                        image:'fringe-festival.jpg',
                        title: 'CTC Fringe Festival',
                        description: 'The CTC is proud to present its fifth annual Fringe Festival: a series of one-act plays showcasing up and coming directors, playwrights and actors over three nights of solid entertainment. For more information, check out our pages for our first, second, third, and fourth...'
                    },
                    {
                        image:'baskerville.png',
                        title: 'Baskerville: A Sherlock Holmes Mystery',
                        description: ''
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
