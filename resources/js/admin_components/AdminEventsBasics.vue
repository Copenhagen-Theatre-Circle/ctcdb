<template>
    <div>
        <!-- Date -->
        <admin-base-input-date-picker
          field="date"
          label="Date"
        />
        <!-- Time -->
        <admin-base-input-time-picker
          field="time"
          label="Time"
        />

        <!-- Venue -->
        <admin-base-input-select
          label="Venue"
          field="venue_id"
          endpoint="venues"
          style="margin-left: 2.4rem;"
        />

        <!-- Eventtype -->
        <admin-base-input-select
          label="Event Type"
          field="eventtype_id"
          endpoint="eventtypes"
          style="margin-left: 2.4rem;"
        />

        <!-- Project Name (if eventtype is Performance or Audition, eventtype_id 1 or 6) -->
        <admin-base-input-autocomplete
          v-if="[1,6].includes(record.eventtype_id)"
          label="Project"
          field="project_id"
          endpoint="projects"
          style="margin-left: 2.4rem;"
        />

        <!-- Members Only switch (only Social Events and Workshops, eventtype_id 4 and 5) -->
        <admin-base-input-switch
          field="for_members_only"
          label="Members Only"
          style="margin-left: 2.4rem;"
        />

        <!-- switch to override defaults (doesn't appear for Worksops and Social Events ) -->
        <admin-base-input-switch
          v-if="!(record.eventtype_id==4 || record.eventtype_id==5)"
          field="defaults_are_overridden"
          label="override defaults"
          @change="focusOnEventName"
          style="margin-left: 2.4rem;"
        />

        <!-- project defaults component (only Performance or Audition) -->
        <admin-events-basics-project-defaults
          v-if="(record.eventtype_id==1 || record.eventtype_id==6) && record.project_id && !record.defaults_are_overridden"
          :id="record.project_id"
          :key="record.project_id"
          style="margin-left: 2.4rem;"
        />

        <!-- eventtype defaults component (only Play Reading or Open Stage) -->
        <admin-events-basics-eventtype-defaults
          v-if="(record.eventtype_id==2 || record.eventtype_id==3) && !record.defaults_are_overridden"
          :id="record.eventtype_id"
          :key="record.eventtype_id"
          style="margin-left: 2.4rem;"
        />

        <!-- entry fields if defaults are overriden, Workshop or Social Event -->
        <div v-if="record.eventtype_id==4 || record.eventtype_id==5 || record.defaults_are_overridden " style="margin-left: 2.4rem;">
          <admin-base-input-text
            label="Event Name"
            field="title"
            ref="eventName"
          />
          <admin-base-input-textarea
            label="Event Short Description"
            field="short_description"
          />
          <admin-base-input-textarea
            label="Event Description"
            field="description"
            rows=20
          />
          <v-subheader class="pl-0">
            Picture
          </v-subheader>
          <v-layout>
            <v-flex shrink>
              <base-image v-if="record.photograph" :image="record.photograph.file_name" :width="400" class="pr-4"/>
              <!-- <img :src="'https://ctc-members.dk/files/'+record.photograph.file_name" alt=""> -->
            </v-flex>
            <v-flex xs6>
              <admin-base-input-dropzone
                label="Event Description"
                field="description"
              />
          </v-flex>
          </v-layout>
        </div>
    </div>
</template>
<script>
  export default {
    // props: ['recordData','changeDataObject'],
    data() {
      return {
        // event: this.recordData,
        // dialog: false,
        // formData: this.changeDataObject,
        // record: this.$store.state.record
      }
    },
    computed:{
      record(){
        return this.$store.state.record
      }
    },
    methods:{
      focusOnEventName(){
        var that=this
        if (this.record.defaults_are_overridden){
          setTimeout(function(){
            that.$refs.eventName.$el.focus()
          }, 40)
        }
      },
      showDialog(){
        this.dialog = true
      },
    }
  }
</script>
