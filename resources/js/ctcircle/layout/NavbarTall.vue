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
      <div class="navbar-menu">
          <navbar-links></navbar-links>
      </div>
    </div>
  </nav>
</template>

<style scoped>
  .nav-menu, .nav-menu .navbar-brand, .nav-menu img {
      min-height: 150px;
      font-size: 1.25rem;
  }
</style>
