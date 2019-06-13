<template>
    <div>
        <ul>
            <li>
                <a class="has-text-primary" href="#synopsis" data-turbolinks="false">Synopsis</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#anotefromthedirector" data-turbolinks="false">A note from the director</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#cast" data-turbolinks="false">Cast</a>
                 <ul v-if="project.projects_plays.length > 1">
                   <li v-for="projects_play in project.projects_plays" class="indent">
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
            <li>
                 <a class="has-text-primary" href="#crew" data-turbolinks="false">Crew</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#photographs" data-turbolinks="false">Photographs</a>
            </li>
            <li>
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
