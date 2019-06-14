<template>
    <div>
        <!-- Title -->
        <people-details-contents-body-title :person="person" />

        <hr>

        <!-- Navigation -->
        <people-details-contents-body-navigation :person="person" />

        <!-- Biography -->
        <people-details-contents-body-section title="Biography" v-if="person.public_bio">
            <people-details-contents-body-section-biography :person="person" />
        </people-details-contents-body-section>

        <!-- Director's Statement -->
        <!-- <shows-details-contents-body-section title="A note from the director" v-if="project.projects_plays[0].directors_statement">
            <shows-details-contents-body-section-statement :project="project" />
        </shows-details-contents-body-section> -->

        <!-- Cast -->
        <people-details-contents-body-section title="as Cast Member" v-if="person.roles.length>0">
            <people-details-contents-body-section-cast :person="person" />
        </people-details-contents-body-section>

        <!-- Crew -->
        <shows-details-contents-body-section title="as Crew Member" v-if="person.crewfunctions.length > 0">
            <people-details-contents-body-section-crew :person="person" />
        </shows-details-contents-body-section>

        <!-- Photographs -->
        <people-details-contents-body-section title="Photographs" v-if="person.phototags.length>0">
            <people-details-contents-body-section-photographs :person="person" />
        </people-details-contents-body-section>

        <!-- Documents -->
        <!-- <shows-details-contents-body-section title="Documents" v-if="project.documents.length > 0">
            <shows-details-contents-body-section-documents :project="project" />
        </shows-details-contents-body-section> -->





    </div>
</template>
<script>
  export default {
    props:['person'],
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
