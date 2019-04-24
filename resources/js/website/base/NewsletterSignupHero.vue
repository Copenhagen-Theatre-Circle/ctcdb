<template>
  <section class="notification" v-if="display">
    <button class="delete" @click="hide()"></button>
    <p class="subtitle">
      <label class="label"><i class="fas fa-envelope fa-lg">&nbsp;</i>Sign up to our Newsletter</label>
    </p>
   <div class="field is-horizontal">
     <div class="field-body">
       <div class="field">
         <p class="control is-expanded has-icons-left">
           <input class="input" type="text" placeholder="First Name">
           <span class="icon is-small is-left">
             <i class="fas fa-user"></i>
           </span>
         </p>
       </div>
       <div class="field">
         <p class="control is-expanded has-icons-left">
           <input class="input" type="text" placeholder="Last Name">
           <span class="icon is-small is-left">
             <i class="fas fa-user"></i>
           </span>
         </p>
       </div>
       <div class="field">
         <p class="control is-expanded has-icons-left has-icons-right">
           <input class="input" type="email" placeholder="Email">
           <span class="icon is-small is-left">
             <i class="fas fa-envelope"></i>
           </span>
         </p>
       </div>
       <div class="field">
         <div class="control">
           <button class="button is-primary">
             Submit
           </button>
         </div>
       </div>
     </div>
   </div>
  </section>
</template>
<script>
  export default {
    data() {
      return {
        display: true
      }
    },
    methods: {
      hide() {
        this.display = false;
      }
    }
  }
</script>
<style scoped>
  .hero {
    padding: 20px;
  }
</style>
