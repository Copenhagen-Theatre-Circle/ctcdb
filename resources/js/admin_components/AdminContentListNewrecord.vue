<template>
  <div>
        <v-divider></v-divider>
        <div class="grey lighten-4 pt-1" style="height:60px; padding-left: 8px">
          <v-btn class="elevation-4" fab small color="primary" @click="createNewRecord">
            <v-icon dark>add</v-icon>
          </v-btn>
          add new record
        </div>
        <v-dialog
          v-model="dialog"
          width="1200"
        >
          <div class="white pt-3 pb-3" v-if="dialog">
            <div row class="pl-5 pr-5 pt-3 pb-3 scroll-y white" style="height: calc(100vh - 220px);">
              <admin-content-record-loading v-if="$store.state.loading" />
              <component
                v-else
                v-bind:is="component"
                :recordData="recordData"
                :changeDataObject="formData"
                @activateButtons="activateButtons"
                />
            </div>
            <admin-content-record-footer :buttonsActive="buttonsActive"/>
          </div>
        </v-dialog>
  </div>
</template>
<script>
  export default {
    props:['configData'],
    data() {
      return {
        component: this.configData.recordTabs[0].component,
        buttonsActive: false,
        recordData:{},
        formData:{},
      }
    },
    computed:{
      dialog() {
        return this.$store.state.isNewRecord
      },
      endpoint() {
        return this.configData.endpoint
      }
    },
    methods: {
      createNewRecord(){
        this.$store.dispatch('prepNewRecord',this.endpoint)
        // this.dialog = true
      },
      activateButtons(){
        this.buttonsActive = true
      }
    }
  }
</script>
<style scoped></style>
