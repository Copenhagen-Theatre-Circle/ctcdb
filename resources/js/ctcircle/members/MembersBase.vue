<template>
    <base-layout title="Members" id="div" members="true">
      <section class="section has-background-white">
        <div class="columns is-multiline">
          <base-button-card title="Member Rebate Codes" icon="barcode" size=4 tooltip="Find your rebate codes for show tickets here" href="rebate-codes" />
          <base-button-card title="Notice Board" icon="thumbtack" size=4 tooltip="The CTC notice board - look for stuff to do, ask for help!" />
          <base-button-card title="Edit Your Profile" icon="user-circle" size=4 tooltip="Edit your personal profile and tell us how you'd like to help." />
          <base-button-card title="CTC People" icon="users" size=4 tooltip="The extended version of the historical database. Find people, read about their interests and reach out to them." />
          <base-button-card title="Productions Database" icon="theater-masks" size=4 tooltip="The extended version of the projects database, where you can also watch videos, and find old production accounts and ticket sales info." />
          <base-button-card title="Seasons Database" icon="calendar" size=4 tooltip="Find historical information for past CTC seasons here."/>
          <base-button-card title="Accounts" icon="coins" size=3 tooltip="The CTC's accounts, regularly brought up to date." />
          <base-button-card title="Plays Database" icon="feather-alt" size=3 tooltip="Browse for plays and enter suggestions." />
          <base-button-card title="Costumes Database" icon="user-astronaut" size=3 tooltip="Want to know what's in our costume store? Look here!" />
          <base-button-card title="Venues Database" icon="warehouse" size=3 tooltip="A list of theatres and other performance spaces." />
          <base-button-card title="Production Handbook" icon="book-open" size=4 tooltip="A 'how to' guide for pretty much every job on a production." />
          <base-button-card title="Committee Handbook" icon="book-open" size=4 tooltip="Read about the various committee members' duties here." />
          <base-button-card title="Statutes" icon="gavel" size=4 tooltip="The CTC's constitution, that defines your rights and duties as a member." />
        </div>
      </section>
    </base-layout>
</template>
<script>
  export default {
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
