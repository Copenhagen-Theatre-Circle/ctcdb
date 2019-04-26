<template>
    <div class="navbar-end">
        <navbar-links-item title="What's On" route="/" />
        <navbar-links-item title="About Us" route="/about" />


        <navbar-links-item title="CTCDB+" route="/history" v-if ="auth.check" />
        <navbar-links-item title="History" route="/history" v-else />


        <navbar-links-item title="Members Only" route="/members" v-if ="auth.check" />
        <navbar-links-item title="Join the CTC!" route="/join" v-else />

        <!-- login or name w/ dropdown -->
        <navbar-links-personal-dropdown v-if ="auth.check" />
        <navbar-links-item title="Login" route="/login" v-else />

    </div>
</template>
<script>
  export default {
    data() {
      return {
        auth
      }
    },
  }
</script>
