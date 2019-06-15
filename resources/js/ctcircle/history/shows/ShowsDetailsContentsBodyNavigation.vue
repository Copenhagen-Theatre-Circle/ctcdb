<template>
    <div>
        <ul>
            <li v-if="project.projects_plays[0].synopsis_programme">
                <a class="has-text-primary" href="#synopsis" data-turbolinks="false">Synopsis</a>
            </li>
            <li v-if="project.projects_plays[0].directors_statement">
                 <a class="has-text-primary" href="#anotefromthedirector" data-turbolinks="false">A note from the director</a>
            </li>
            <li v-if="project.projects_plays[0].actors.length > 0">
                 <a class="has-text-primary" href="#cast" data-turbolinks="false">Cast</a>
                 <ul v-if="project.projects_plays.length > 1">
                   <li v-for="(projects_play, key) in project.projects_plays" class="indent" :key="key">
                      <a
                        class="has-text-primary is-size-7"
                        :href="'#' + projects_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
                        data-turbolinks="false"
                      >
                        {{projects_play.play.title}}
                      </a>
                   </li>
                 </ul>
            </li>
            <li v-if="project.crewmembers.length > 0 || project.projects_plays[0].crewmembers.length > 0">
                 <a class="has-text-primary" href="#crew" data-turbolinks="false">Crew</a>
            </li>
            <li v-if="
                project.photographs.show_stills > 0
                ||
                project.photographs.promo_pics > 0
                ||
                project.photographs.portraits > 0
                ||
                project.photographs.behind_the_scenes > 0"
            >
              <a class="has-text-primary" href="#photographs" data-turbolinks="false">Photographs</a>
            </li>
            <li v-if="project.documents.length > 0">
                 <a class="has-text-primary" href="#documents" data-turbolinks="false">Documents</a>
            </li>
        </ul>
    </div>
</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped>
    a::before {
        content: "#";
        margin-right: 0.7rem;
        color: #f9aeb5;
    }
    .indent {
      margin-left: 1.2rem;
      line-height: 16px;
    }
</style>
