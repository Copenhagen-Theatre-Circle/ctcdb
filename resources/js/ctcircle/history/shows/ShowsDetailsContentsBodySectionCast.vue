<template>
    <div>
        <div v-for="(projects_play, key) in project.projects_plays" :key="key">
            <h1
                class="subtitle is-size-4"
                :id="projects_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
                v-if="project.projects_plays.length > 1"
            >
                {{projects_play.play.title}}
            </h1>
            <b-table
                :data="projects_play.actors"
                narrowed
            >
                <template slot-scope="props">
                    <b-table-column>
                        <base-image
                            v-if="props.row.person.portraits.length > 0"
                            :image="props.row.person.portraits[0].file_name"
                            directory="media"
                            :portrait="true"
                            :width="50"
                        />
                        <base-image
                            v-else
                            image="unisex_silhouette.png"
                            directory="media"
                            :width="50"
                        />
                    </b-table-column>
                    <b-table-column label="Character">
                        {{ props.row.character.name }}
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
</template>
<script>
  export default {
    props:['project'],
  }
</script>
<style>
    .b-table .table {
        width: auto;
        background-color: transparent;
        margin-bottom: 1.8rem;
        /*margin-left: -0.5rem;*/
    }
    .b-table .table td {
        vertical-align: middle;
    }
    .b-table thead {
        display: none;
    }
    .b-table td:first-child {
        padding-left: 0px;
    }
</style>
<style scoped>
    h1 {
        /*margin: 0rem 0rem 0.7rem 0rem !important;*/
        padding-top: 80px;
        margin-top: -80px;
        margin-bottom: 0.7rem !important;
    }
    img {
        padding-top: 4px;
    }
</style>
