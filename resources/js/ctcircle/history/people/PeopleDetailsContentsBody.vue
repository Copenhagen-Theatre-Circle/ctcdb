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

        <!-- Cast -->
        <people-details-contents-body-section title="as Cast Member" v-if="person.roles.length>0">
            <people-details-contents-body-section-cast :person="person" />
        </people-details-contents-body-section>

        <!-- Crew -->
        <people-details-contents-body-section title="as Crew Member" v-if="person.crewfunctions.length > 0">
            <people-details-contents-body-section-crew :person="person" />
        </people-details-contents-body-section>

        <!-- Photographs -->
        <people-details-contents-body-section
            title="Photographs"
            v-if="person.phototags.length>0&& isStaging"
        >
            <people-details-contents-body-section-photographs :person="person" />
        </people-details-contents-body-section>

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
    computed: {
        isStaging(){
            return document.URL.includes("staging")
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
