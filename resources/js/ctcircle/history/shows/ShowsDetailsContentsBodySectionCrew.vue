<template>
    <div>
        <!-- Production Crew for shows only if more than one play -->
        <div v-if="project.projects_plays.length > 1">
            <div
                v-for="(projects_play, key) in project.projects_plays"
                :key=key
            >
                <h1
                    class="subtitle is-size-4"
                    :id="'production_'+projects_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
                >
                    {{projects_play.play.title}}
                </h1>
                <b-table
                    :data="projects_play.crewmembers"
                >
                    <template slot-scope="props">
                        <b-table-column label="Function">
                            {{ props.row.crewtype.name }}
                        </b-table-column>
                        <b-table-column label="Actress/Actor">
                            <a :href="'/people/' + props.row.person.id">
                            {{ props.row.person.first_name }} {{ props.row.person.last_name }}
                            </a>
                        </b-table-column>
                    </template>
                </b-table>
            </div>
        </div>
        <!-- general production crew - show title if only more than one play -->
        <h1
            class="subtitle is-size-4"
            id="productioncrew"
            v-if="project.projects_plays.length > 1"
        >
            Overall Production Crew
        </h1>
        <b-table
            :data="project.crewmembers"
        >
            <template slot-scope="props">
                <b-table-column label="Function">
                    {{ props.row.crewtype.name }}
                </b-table-column>
                <b-table-column label="Actress/Actor">
                    <a :href="'/people/' + props.row.person.id">
                    {{ props.row.person.first_name }} {{ props.row.person.last_name }}
                    </a>
                </b-table-column>
            </template>
        </b-table>
        <div v-if="project.special_thanks">
            <h1 class="subtitle is-size-4">
                Special Thanks
            </h1>
            <p>{{project.special_thanks}}</p>
            <br>
        </div>
    </div>
</template>
<script>
  export default {
    props:['project'],
  }
</script>
<style scoped>
    h1 {
        margin-top: 0.6rem !important;
        margin-bottom: 0.6rem !important;
    }
</style>
