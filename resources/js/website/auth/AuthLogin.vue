<template>
    <base-layout title="Home" id="div" >
        <div class="container">
            <div class="hero intro">
                <div class="columns is-centered">
                    <div class="column is-12">
                      <p class="has-text-white content is-size-5">
                        By <a href="/register">registering</a>, you can create your own profile to tell us how you would like to help out, and sign up for auditions and workshops.
                      </p>
                      <p class="has-text-white content is-size-5">
                        You don't have to be a CTC member to register, but there are <a href="/join">plenty of extra goodies</a> on this site if you become a member.
                      </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns is-centered">
                <div class="column is-5">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Login</p>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="/login">
                                <input type="hidden" name="_token" :value="csrf">
                                <div class="field">
                                    <label for="email" class="label">E-mail Address</label>

                                    <div class="control">
                                        <input
                                        class="input"
                                        id="email"
                                        type="email"
                                        name="email"
                                        v-model="email"
                                        required
                                        autofocus
                                        >
                                            <span
                                                class="help is-danger"
                                                role="alert"
                                                v-if="'email' in errors"
                                                >
                                                {{errors.email[0]}}
                                            </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password" class="label">Password</label>

                                    <div class="control">
                                        <input
                                            class="input"
                                            id="password"
                                            type="password"
                                            name="password"
                                            required>

                                            <span
                                                class="help is-danger"
                                                role="alert"
                                                v-if="'password' in errors"
                                                >
                                                <strong>{{errors.password[0]}}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                            <label class="checkbox">
                                                <input
                                                class="chceckbox"
                                                type="checkbox"
                                                name="remember"
                                                v-model="rememberChecked"
                                                >
                                                Remember Me
                                            </label>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-link">
                                            Login
                                        </button>
                                    </div>
                                    <div class="control">
                                        <a class="button is-text" href="/password/reset">
                                            Forgot Your Password
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <footer class="card-footer">
                            <p class="card-footer-item">
                              <span>
                                Not yet registered? <a href="/register">Register here!</a>
                              </span>
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </base-layout>
</template>
<script>
  export default {
    props:['errors','old'],
    data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        rememberChecked: this.old.remember,
        email: this.old.email,
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    .card {
        border-radius: 3px;
    }
    .intro{
        background-color: rgba(0, 0, 0, 0.5 );
        padding: 1.5rem;
        margin-top: 1rem;
      }
</style>
