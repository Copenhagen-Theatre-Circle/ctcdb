<template>
    <div class="column is-half-tablet is-one-third-desktop">
      <transition name="flip">
        <div @click="toggleCard" v-if="!flipped" class="card" key="front">
          <flip-card-title :event="event"></flip-card-title>
          <div class="card-image">
            <figure class="image is-4by3">
              <img
              :src="'https://res.cloudinary.com/ctcircle/image/fetch/h_960,w_1280,c_fill/' + event.image "
              alt="Placeholder image"
              >
            </figure>
          </div>
        </div>
        <div @click="toggleCard" v-else class="card" key="back">
          <flip-card-title :event="event"></flip-card-title>
          <div class="card-content">
            <div class="content">
              {{event.description}}
            </div>
          </div>
          <footer class="card-footer">
            <a href="http://ctcircle.dk" class="card-footer-item">More Info</a>
            <a v-if="event.seccode" :href="'http://place2book.com/events/' + event.seccode" target="_blank" class="card-footer-item">Buy Tickets!</a>
          </footer>
        </div>
      </transition>
    </div>
</template>

<script>
  export default {
    props:['event'],
    methods: {
      toggleCard: function(){
        this.flipped = !this.flipped;
      }
    },
    data() {
        return {
            flipped: false,
          }
      }
  }
</script>

<style scoped>
    .card:hover {
      transform: scale(1.05) !important;
    }

    .card {
      transition: all 0.5s ease;
      cursor: pointer;
      will-change: transform;
    }

    .flip-enter-active {
      transition: all 0.6s ease;
    }

    .flip-leave-active {
      display: none;
    }

    .flip-enter, .flip-leave {
      transform: rotateY(180deg);
      opacity: 0;
    }
</style>
