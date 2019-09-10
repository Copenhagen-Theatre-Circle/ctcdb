<template>
    <div v-if="data">
        <p class="caption primary--text">The following defaults are entered under the eventtype settings for '{{data.name}}'. Please select "override defaults" above if you would like to enter specific information for this event or edit the information under the eventtype record itself.</p>
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
            v-model="data.long_description"
            rows=10
            disabled
        />
        <v-subheader class="pl-0">
          Default Picture
        </v-subheader>
        <base-image v-if="data.photograph" :image="data.photograph.file_name" :width="400"
          class="pr-4" />
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
    created () {
        const self=this
        axios
          .get('/admin-api/eventtypes/' + self.id)
          .then(response => (
                setTimeout(function(){self.data = response.data}, 300)
            ))
    }
  }
</script>
