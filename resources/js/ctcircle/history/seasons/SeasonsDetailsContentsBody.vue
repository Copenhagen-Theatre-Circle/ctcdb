<template>
    <div>
        <!-- Title -->
        <seasons-details-contents-body-title :season="season" />

        <hr>

        <!-- Navigation -->
        <seasons-details-contents-body-navigation :season="season" />

        <!-- Shows -->
        <seasons-details-contents-body-section title="Productions" v-if="season.projects">
            <seasons-details-contents-body-section-productions :season="season" />
        </seasons-details-contents-body-section>

        <!-- Committee -->
        <seasons-details-contents-body-section title="Committee" v-if="season.committee_members">
            <seasons-details-contents-body-section-committee :season="season" />
        </seasons-details-contents-body-section>



    </div>
</template>
<script>
  export default {
    props:['season'],
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
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
