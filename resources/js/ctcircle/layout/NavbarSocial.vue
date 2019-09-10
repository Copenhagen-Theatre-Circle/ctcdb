<template>
    <nav class="navbar is-light nav-links" id="navbar">
        <div class="container">
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="navbar-item">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="navbar-item">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a class="navbar-item">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                        <a  class="navbar-item"
                            @click="showNewsletterSignup"
                        >
                            <i class="fas fa-envelope"></i>
                            <strong class="is-size-7" style="padding-left: 0.3rem;">Newsletter</strong>
                        </a>
                    </div>
                </div>
        </div>
    </nav>
</template>
<script>
    export default {
        methods: {
            showNewsletterSignup(){
                this.$emit('show-newsletter-signup')
            }
        }
    }
</script>
<style scoped>
    .navbar-item { padding-left: 0px; }
  .navbar {
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  }
</style>
