<template>

  <nav class="navbar is-dark nav-menu" role="navigation" aria-label="main navigation">

    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="/images/red-badge-transparent-white-border.png">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
          <a
            v-for="item in items"
            :href="item.route"
            class="navbar-item"
            :class="{'is-underlined': item.route.split('/')[1]==activeLink}"
          >
            {{item.title}}
          </a>
        </div>
      </div>

    </div>

  </nav>

</template>

<style scoped>
  .nav-menu, .nav-menu .navbar-brand, .nav-menu img{
      min-height: 150px;
      font-size: 1.25rem;
  }
  .is-underlined {
    border-bottom: #d10f22 solid 3px;
  }
</style>

<script>
export default {
  data() {
      return {
          activeLink: $(location).attr('pathname').split('/')[1],
          items: [
              {
                title: 'What\'s On',
                route: '/'
              },
              {
                title: 'About Us',
                route: '/about'
              },
              {
                title: 'History',
                route: '/history/shows'
              },
              {
                title: 'Join the CTC!',
                route: '/join'
              },
              {
                title: 'Login',
                route: '/login'
              },
            ]
          }
      }
  }
</script>
