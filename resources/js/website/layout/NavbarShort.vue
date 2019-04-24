<template>
  <nav class="navbar is-dark is-fixed-top" id="navbar-scrolling">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://ctcircle.test">
          <img src="/images/ctc-favicon.png" style="min-height: 45px !important;">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div class="navbar-menu">
        <div class="navbar-end">
          <a class="navbar-item is-tab is-active">
            What's On
          </a>

          <a class="navbar-item">
            About Us
          </a>

          <a class="navbar-item">
            History
          </a>

          <a class="navbar-item">
            Join the CTC!
          </a>

          <a class="navbar-item">
            Login
          </a>

        </div>
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
<style scoped></style>
