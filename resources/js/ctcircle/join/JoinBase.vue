<template>
    <base-layout title="Home" id="div" >
      <section class="section">
        <div class="columns is-centered">
          <div class="column is-8">
            <table class="table is-fullwidth" v-for="(benefitgroup, key) in benefits" :key="key">
              <thead><th>{{benefitgroup.name}}</th></thead>
              <tr v-for="(benefit,key) in benefitgroup.memberbenefits" :key="key">
                <td style="width: 80%;">{{benefit.name}}</td>
                <td>{{benefit.member}}</td>
                <td>{{benefit.non_member}}</td>
              </tr>
            </table>
          </div>
        </div>
      </section>
    </base-layout>
</template>
<script>
  export default {
    props: ['benefits'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
  section {
    background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
    padding-top: 1rem;
    margin-top: 1rem;
  }
</style>
