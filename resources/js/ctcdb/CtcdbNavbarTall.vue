<template>
  <nav class="navbar is-white nav-menu" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="/images/red-badge-transparent-white-border.png">
          <h1>
            <span class="title has-text-dark">CTC History</span>
            <br>
            <span class="subtitle has-text-dark">The Digital Archives</span>
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

<style scoped>
  .navbar {
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  }
  .nav-menu, .nav-menu .navbar-brand, .nav-menu img {
      min-height: 150px;
      font-size: 1.25rem;
  }
  .title, .subtitle{
    padding-left: 1.5rem;
  }
</style>
