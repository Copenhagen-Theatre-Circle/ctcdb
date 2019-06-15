<template>
    <div>
        <b-table
            :data="person.crewfunctions"
            narrowed
        >
            <template slot-scope="props">
                <!-- <b-table-column>
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
                </b-table-column> -->
                <b-table-column label="Play">
                    <a :href="'/shows/' + props.row.project_id">
                        {{ props.row.project }}
                    </a>
                </b-table-column>
                <b-table-column label="Function">
                    {{ props.row.crewfunction }}
                </b-table-column>
                <b-table-column label="Year">
                    {{ props.row.year }}
                </b-table-column>
            </template>
        </b-table>
    </div>
</template>
<script>
  export default {
    props:['person'],
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
