<template>
    <div v-if="data">
        <p class="caption primary--text">The following defaults are entered under the project record for '{{data.name}}'. Please select "override defaults" above if you would like to enter specific information for this event or edit the information under the project record itself.</p>
        <v-text-field
            label="Event Name"
            placeholder=" "
            ref="eventName"
            v-model="data.name"
            disabled
        />
        <v-textarea
            label="Event Short Description"
            placeholder=" "
            v-model="data.short_description"
            rows=5
            disabled
        />
        <v-textarea
            label="Event Description"
            placeholder=" "
            v-model="data.synopsis"
            rows=10
            disabled
        />
    </div>
</template>
<script>
  import axios from 'axios'
  export default {
    props:['id'],
    data() {
      return {
        data: null
      }
    },
    mounted () {
        const self=this
        axios
          .get('/admin-api/projects/' + self.id)
          .then(response => (
                setTimeout(function(){self.data = response.data}, 300)
            ))
    }
  }
</script>
<style scoped></style>
