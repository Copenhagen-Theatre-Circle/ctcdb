<template>
    <v-container fluid fill-height class="pa-0">
      <v-layout row fill-height>
        <v-flex class="xs3 elevation-3" style="z-index: 30;">
            <admin-content-list :configData="configData" :key="configData.endpoint"/>
        </v-flex>
        <v-flex class="xs9 elevation-3 grey lighten-4" white style="z-index: 40;">
            <admin-content-record :configData="configData" v-if="activeRecordId" :key="activeRecordId" />
            <admin-content-select-record v-else />
        </v-flex>
      </v-layout>
    </v-container>
</template>
<script>
  import configStore from "../admin_config.js"
  export default {
    computed: {
      activeRecordId(){
        return this.$store.state.record_id
      },
      endpoint(){
        return this.$route.params.resource
      },
      configData(){
        const self = this
        return configStore.endpoints.find(obj => {
          return obj.endpoint === self.endpoint
        })
      }
    }
  }
</script>
<style scoped></style>
