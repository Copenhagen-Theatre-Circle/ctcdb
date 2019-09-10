<template>
    <base-layout title="Home">
      <section class="section has-background-white">
        <div class="columns is-centered">
          <div class="column is-8">
            <div class="content">
              <p>Anyone can become a member of the CTC!</p>
              <p>Membership costs 250kr per year for a single membership, 400kr per year for a family membership and 125kr per year for anyone aged 25 or under.</p>
              <p class="has-text-centered"><a class="button is-primary" href="https://www.place2book.com/en/choose_ticket_sales_workflow?back=1&seccode=01d9d0794c" target="_blank">Sign up Here</a></p>
              <p>While being a member is not a prerequisite for taking part in our activities, there are many perks and benefits that you can enjoy if you join the CTC:</p>
            </div>
            <table class="table is-fullwidth" v-for="(benefitgroup, key) in benefits" :key="key">
              <thead>
                <th>{{benefitgroup.name}}</th>
                <th class="is-size-7">Members</th>
                <th class="is-size-7">Non-Members</th>
              </thead>
              <tr v-for="(benefit,key) in benefitgroup.memberbenefits" :key="key">
                <td style="width: 79%;">{{benefit.name}}</td>
                <td class="has-text-centered">
                  <span v-if="benefit.member" class="has-text-primary"><i class="fas fa-check"></i></span>
                </td>
                <td class="has-text-centered">
                  <span v-if="benefit.non_member" class="has-text-primary"><i class="fas fa-check"></i></span>
                </td>
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
    padding-top: 1rem;
    margin-top: 1rem;
  }
</style>
