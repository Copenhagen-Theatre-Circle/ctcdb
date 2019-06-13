<template>
    <div>
        <!-- Title -->
        <shows-details-contents-body-title :project="project" />

        <hr>

        <!-- Navigation -->
        <shows-details-contents-body-navigation :project="project" />

        <!-- Synopsis -->
        <shows-details-contents-body-section title="Synopsis">
            <shows-details-contents-body-section-synopsis :project="project" />
        </shows-details-contents-body-section>

        <!-- Director's Statement -->
        <shows-details-contents-body-section title="A note from the director">
            <shows-details-contents-body-section-statement :project="project" />
        </shows-details-contents-body-section>

        <!-- Cast -->
        <shows-details-contents-body-section title="Cast">
            <shows-details-contents-body-section-cast :project="project" />
        </shows-details-contents-body-section>

        <!-- Crew -->
        <shows-details-contents-body-section title="Crew">
            <shows-details-contents-body-section-crew :project="project" />
        </shows-details-contents-body-section>

        <!-- Photographs -->
        <shows-details-contents-body-section title="Photographs">
            <shows-details-contents-body-section-photographs :project="project" />
        </shows-details-contents-body-section>

        <!-- Documents -->
        <shows-details-contents-body-section title="Documents">
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
    hr {
        background-color: lightgrey;
        height: 1px;
    }
</style>
