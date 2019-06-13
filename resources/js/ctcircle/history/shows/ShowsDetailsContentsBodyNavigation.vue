<template>
    <div>
        <ul>
            <li>
                <a class="has-text-primary" href="#synopsis">Synopsis</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#directorsstatement">Director's Statement</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#cast">Cast</a>
                 <ul v-if="project.projects_plays.length > 1">
                   <li v-for="projects_play in project.projects_plays" class="indent">
                      <a
                        class="has-text-primary is-size-7"
                        :href="'#' + projects_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
                      >
                        {{projects_play.play.title}}
                      </a>
                   </li>
                 </ul>
            </li>
            <li>
                 <a class="has-text-primary" href="#crew">Crew</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#photographs">Photographs</a>
            </li>
            <li>
                 <a class="has-text-primary" href="#documents">Documents</a>
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
