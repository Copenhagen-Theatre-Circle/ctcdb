<template>
    <base-layout title="History">
        <section class="section">
          <br>
          <history-tabs activeTab="shows"></history-tabs>
          <div class="columns is-multiline">

            <shows-index-card
              v-for="project in projects"
              :title="project.name"
              :key="project.id"
            >
            <h1 class="has-text-light">{{project.year}}</h1>
            <div v-if="project.poster.length > 0">
              <a :href="'/history/shows/'+project.id">
                <base-image width=400 :image="project.poster[0].photograph.file_name"></base-image>
              </a>
            </div>
            </shows-index-card>
          </div>
        </section>
    </base-layout>
</template>
<script>
  export default {
    props: ['projects']
  }
</script>
<style scoped>
    section {
      background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>
