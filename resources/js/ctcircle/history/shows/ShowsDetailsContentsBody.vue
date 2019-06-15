<template>
    <div>
        <!-- Title -->
        <shows-details-contents-body-title :project="project" />

        <!-- Navigation -->
        <shows-details-contents-body-navigation :project="project" />

        <!-- Synopsis -->
        <shows-details-contents-body-section title="Synopsis" v-if="project.projects_plays[0].synopsis">
            <shows-details-contents-body-section-synopsis :project="project" />
        </shows-details-contents-body-section>

        <!-- Director's Statement -->
        <shows-details-contents-body-section title="A note from the director" v-if="project.projects_plays[0].directors_statement">
            <shows-details-contents-body-section-statement :project="project" />
        </shows-details-contents-body-section>

        <!-- Cast -->
        <shows-details-contents-body-section title="Cast" v-if="project.projects_plays[0].actors.length > 0">
            <shows-details-contents-body-section-cast :project="project" />
        </shows-details-contents-body-section>

        <!-- Crew -->
        <shows-details-contents-body-section title="Crew" v-if="project.crewmembers.length > 0 || project.projects_plays[0].crewmembers.length > 0">
            <shows-details-contents-body-section-crew :project="project" />
        </shows-details-contents-body-section>

        <!-- Photographs -->
        <shows-details-contents-body-section title="Photographs"
            v-if="
                project.photographs.show_stills
                ||
                project.photographs.promo_pics
                ||
                project.photographs.portraits
                ||
                project.photographs.behind_the_scenes"
            >
            <shows-details-contents-body-section-photographs :project="project" />
        </shows-details-contents-body-section>

        <!-- Documents -->
        <shows-details-contents-body-section title="Documents" v-if="project.documents.length > 0">
            <shows-details-contents-body-section-documents :project="project" />
        </shows-details-contents-body-section>





    </div>
</template>
<script>
  export default {
    props:['project'],
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
</style>
