<template>
    <div class="column is-half-tablet is-one-quarter-desktop">
        <div @click="toggleModal" class="card">
            <header class="card-header has-background-dark">
                <p class="card-header-title has-text-white">
                    {{title}}
                </p>
            </header>
            <div class="card-image">
                <figure class="image is-4by3">
                  <img
                  :src="'https://res.cloudinary.com/ctcircle/image/fetch/h_960,w_1280,c_fill/https://ctc-members.dk/files/' + photograph"
                  >
                </figure>
            </div>
        </div>
        <div class="modal" :class="{'is-active':modalIsActive}">
          <div class="modal-background" @click="toggleModal"></div>
            <div class="modal-card">
              <header
                class="modal-card-head"
                :style="'background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url(\'https://ctc-members.dk/files/'+ photograph + '\') no-repeat center center fixed;background-size: cover;'"
              >
                <p class="modal-card-title has-text-white is-size-2" :class="{'is-size-3': title.length>5}">{{title}}</p>
                <button class="delete" aria-label="close" @click="toggleModal"></button>
              </header>
              <section class="modal-card-body">
                <div class="content">
                  <vue-markdown :source="text" v-if="text">
                  </vue-markdown>
                </div>
              </section>
              <footer class="modal-card-foot">
                <p>If you would like to take part in our activities, please <a href="/login">sign in</a> to create a profile and fill in our participation questionnaire.</p>
              </footer>
            </div>
          <!-- <button class="modal-close is-large" @click="toggleModal"></button> -->
        </div>
    </div>
</template>
<script>
  import VueMarkdown from 'vue-markdown'
  export default {
    props: {
      'title': {},
      'text': {},
      'image': {
        default: '5c803030996db.jpg'
      }
    },
    components: {
        'vue-markdown': VueMarkdown
      },
    data(){
      return{
        modalIsActive: false,
      }
    },
    computed: {
        photograph() {
          return this.image || '5c803030996db.jpg';
        }
      },
    methods: {
        toggleModal(){
            this.modalIsActive=!this.modalIsActive;
        }
    }
  }
</script>

<style scoped>
  .modal-card-head{
    min-height: 5rem;
  }
  .card:hover {
      transform: scale(1.05) !important;
    }

  .card {
    transition: all 0.5s ease;
    cursor: pointer;
    will-change: transform;
  }

  .content {
    font-size: 1.1rem;
  }

</style>
