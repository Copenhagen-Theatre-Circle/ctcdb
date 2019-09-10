<template>
    <section class="section" :style="'background: url(\'images/' + item.image + '\') center center;background-size: cover;'">
        <div class="columns is-vcentered">
          <div class="column"></div>
          <div class="column content-card">
            <div class="card transparent-card">
              <div class="card-content transparent-card">
                <p class="title has-text-white">
                    {{item.title}}
                </p>
                <p class="lead has-text-white">
                    {{item.description}}
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>
</template>
<script>
  export default {
    props:['item'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    .columns{
        height: 300px;
    }
    .transparent-card {
      background-color: rgba(0, 0, 0, 0.5 );
      color: #fff !important;
    }
    .arrow .card {
      padding: 10px;
    }
    .content-card {
      margin-right: 20px;
    }
    .arrow {
      padding: 0px;
      margin-left: -20px;
      margin-right: -20px;
    }

</style>
