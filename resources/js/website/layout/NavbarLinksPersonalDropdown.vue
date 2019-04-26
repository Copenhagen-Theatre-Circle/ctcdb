<template>
    <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link">
        {{auth.user.name}}
      </a>
      <div class="navbar-dropdown">
        <a href="/profile" class="navbar-item">
          Edit Profile
        </a>
        <a
          href="/logout"
          class="navbar-item"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
            <input type="hidden" name="_token" :value="csrf">
        </form>
      </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        auth,
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
  .navbar-dropdown, .navbar-dropdown .navbar-item {
    background-color: #282828;
    color: white;
    font-size: 1rem;
    border-top-color: #333;
  }
</style>
