<template>
    <section class="hero is-medium" :style="'background: url(\'images/' + items[0].image + '\') center center; background-size: cover;'">
      <div class="hero-body">
        <div class="columns">
          <div class="column"></div>
          <div class="column">
            <div class="card transparent-card">
              <div class="card-content transparent-card">
                <p class="title has-text-white">
                    {{items[0].title}}
                </p>
                <p class="lead has-text-white">
                    {{items[0].description}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<style scoped>
    .transparent-card {
      background-color: rgba(0, 0, 0, 0.3 );
      color: #fff !important;
    }
    .hero-body {
      max-height: 30rem;
    }
</style>

<script>
    export default{
        data(){
            return{
                items:[
                    {
                        image:'inspector-banner.png',
                        title: 'An Inspector Calls',
                        description: 'Filled with twists, turns and gasps, CTC’s adaptation of J.B. Priestly’s An Inspector Calls will leave you guessing until the very last moment…'
                    }
                ]
            }
        }
    }
</script>
