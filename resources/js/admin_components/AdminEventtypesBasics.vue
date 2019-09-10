<template>
    <div>
        <!-- Name -->
        <admin-base-input-text
            label="Eventtype Name"
            placeholder=" "
            field="name"
        />
        <v-layout>
            <v-flex xs4>
                <admin-base-input-text
                    :append-icon="'fa-'+eventtype.icon"
                    label="Fontawesome Icon"
                    placeholder=" "
                    field="icon"
                />
            </v-flex>
        </v-layout>
        <admin-base-input-textarea
            placeholder=" "
            label="Eventtype Short Description"
            field="short_description"
            rows=5
        />

        <admin-base-input-textarea
            placeholder=" "
            label="Eventtype Long Description"
            field="long_description"
            rows=10
        />

          <v-subheader class="pl-0">
            Default Picture
          </v-subheader>
          <v-layout>
            <v-flex shrink>
              <base-image v-if="eventtype.photograph" :image="eventtype.photograph.file_name" :width="400"
                class="pr-4" />
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
</template>
<script>
  export default {
    computed:{
        eventtype(){
            return this.$store.state.record
        }
    }
  }
</script>
<style scoped></style>
