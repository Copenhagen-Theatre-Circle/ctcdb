<template>
  <nav class="navbar is-white is-fixed-top" id="navbar-scrolling">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://ctcircle.test">
          <img src="/images/ctc-favicon.png" style="min-height: 45px !important;">
          <h1>
            <span class="title has-text-dark is-size-5">CTC History</span>
            <br>
            <span class="subtitle has-text-dark is-size-6">The Digital Archives</span>
          </h1>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div class="navbar-menu">
        <ctcdb-navbar-links/>
      </div>
    </div>
  </nav>
</template>
<script>
  export default {
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    },
    mounted () {
        window.onscroll = function() {scrollFunction();};
        function scrollFunction() {
          if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
            document.getElementById("navbar-scrolling").style.top = "0";
          } else {
            document.getElementById("navbar-scrolling").style.top = "-50px";
          }
        }
    }
  }
</script>
<style scoped>
  .title, .subtitle{
    padding-left: 0.6rem;
  }
  .navbar {
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  }
</style>
