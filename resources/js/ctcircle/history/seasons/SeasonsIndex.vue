<template>
    <base-layout title="History">
        <section class="section">
          <br>
          <history-tabs activeTab="seasons"></history-tabs>
          <b-table striped hoverable :data="seasons">
            <template slot-scope="props">
              <b-table-column field="year_start" label="Season #" width="100">
                <a :href="'/history/seasons/'+ props.row.year_start" >
                  {{ props.row.year_start - 1967}}
                </a>
              </b-table-column>
              <b-table-column field="last_name" label="Years" width="140">
                  {{ props.row.year_start }}/{{ props.row.year_start+1 }}
              </b-table-column>
              <b-table-column field="last_name" label="Shows" >
                  <span v-for="(project, index) in props.row.projects">
                    {{project.name.replace(/ /g,'&nbsp')}}<span v-if="index+1 < props.row.projects.length">,&#32;</span>
                  </span>
              </b-table-column>
              <b-table-column field="last_name" label="Chairperson" >
                <div v-if="props.row.chairperson[0]">
                  {{props.row.chairperson[0].person.first_name}}&nbsp;{{props.row.chairperson[0].person.last_name}}
                </div>
              </b-table-column>
              <b-table-column custom-key="actions">
                <a :href="'/history/seasons/'+ props.row.year_start" class="button is-small is-outlined is-primary is-light">
                 <i class="fas fa-eye"></i>&nbsp;&nbsp; view season
                </a>
              </b-table-column>
            </template>
          </b-table>
        </section>
    </base-layout>
</template>
<script>
  export default {
    props:['seasons'],
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
  section {
      background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>
<style>
    .b-table .table{
        border-radius: 0px;
    }
</style>
