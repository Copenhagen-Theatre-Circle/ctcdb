<template>
    <div>
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
    </div>
</template>
<script>
  export default {
    props:['project'],
  }
</script>
