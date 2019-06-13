<template>
    <base-layout title="History">
        <section class="section">
          <br>
          <history-tabs activeTab="people"></history-tabs>
          <div class="columns">
            <div class="column is-6">
              <b-field>
                <b-input v-model="search_query" placeholder="search name or function" />
              </b-field>
            </div>
          </div>
          <b-table striped hoverable :data="filter">
            <template slot-scope="props">
              <b-table-column field="full_name" label="Name" width="250">
                <a :href="'/history/people/'+ props.row.id" >
                  {{ props.row.first_name }} {{ props.row.last_name }}
                </a>
              </b-table-column>
<!--               <b-table-column field="last_name" label="First Name">
                  {{ props.row.first_name }}
              </b-table-column> -->
              <b-table-column field="last_name" label="Years" width="140">
                  {{ props.row.years }}
              </b-table-column>
              <b-table-column field="last_name" label="Activities" >
                  {{ props.row.activities }}
              </b-table-column>
              <b-table-column custom-key="actions">
                <a :href="'/history/people/'+ props.row.id" class="button is-small is-outlined is-primary is-light">
                 <i class="fas fa-eye"></i>&nbsp;&nbsp; view profile
                </a>
              </b-table-column>
            </template>
          </b-table>
        </section>
    </base-layout>
</template>
<script>
  export default {
    props:['people'],
    data() {
      return {
        search_query: '',
        columns: [
                    {
                        field: 'last_name',
                        label: 'Last Name',
                    },
                    {
                        field: 'first_name',
                        label: 'First Name',
                    },
                    {
                      field: 'years',
                      label: 'Years'
                    },
                    {
                      field: 'activities',
                      label: 'Activities',
                      width: 700,
                    }
                ]
      }
    },
    computed: {
      filter: function() {
            var name_re = new RegExp(this.search_query, 'i')
            var data = []
            var i
            for (i in this.people) {
              var search_term = (this.people[i].first_name + ' ' + this.people[i].last_name + ' ' + this.people[i].activities)
              if (search_term.match(name_re)) {
                data.push(this.people[i])
              }
            }
            return data
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
