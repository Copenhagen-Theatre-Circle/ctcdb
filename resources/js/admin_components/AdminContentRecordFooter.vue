<template>
  <v-layout>
    <v-flex>
      <v-divider></v-divider>
      <div class="pl-5 pr-5 pt-1">
        <v-layout>
          <v-flex>
            <div v-if="this.$store.state.hasUnsavedChanges"><p class="pt-3 primary--text">You have unsaved changes!</p></div>
          </v-flex>
          <v-flex>
            <v-btn class="right primary" :disabled="!showSaveButton" @click="save()">Save</v-btn>
            <v-btn class="right" :disabled="!showCancelButton" @click="cancel()">Cancel</v-btn>
          </v-flex>
        </v-layout>
      </div>
    </v-flex>
  </v-layout>
</template>
<script>
  export default {
    computed: {
      showSaveButton(){
        return this.$store.state.hasUnsavedChanges
      },
      showCancelButton(){
        return this.$store.state.hasUnsavedChanges || this.$store.state.isNewRecord
      },
    },
    methods:{
      cancel(){
        if (this.$store.state.isNewRecord){
          this.$store.dispatch('cancelNewRecord')
        } else {
          this.$store.dispatch('cancelUpdate')
        }
      },
      save(){
        if (this.$store.state.isNewRecord){
          this.$store.dispatch('storeNewRecord')
        } else {
          this.$store.dispatch('storeChanges')
        }
      }
    }
  }
</script>
<style scoped></style>
