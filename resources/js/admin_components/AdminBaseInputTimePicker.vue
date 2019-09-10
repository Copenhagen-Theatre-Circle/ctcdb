<template>
    <v-dialog
        ref="dialog"
        v-model="modal"
        :return-value.sync="fieldContent"
        persistent
        lazy
        full-width
        width="290px"
      >
        <template v-slot:activator="{ on }">
          <v-text-field
            v-model="fieldContent"
            :label="label"
            prepend-icon="access_time"
            readonly
            v-on="on"
          ></v-text-field>
        </template>
        <v-time-picker
          v-if="modal"
          v-model="fieldContent"
          color="primary"
          format="24hr"
          full-width
        >
          <v-spacer></v-spacer>
          <v-btn flat color="primary" @click="modal = false">Cancel</v-btn>
          <v-btn flat color="primary" @click="$refs.dialog.save(fieldContent)">OK</v-btn>
        </v-time-picker>
      </v-dialog>
</template>
<script>
  export default {
    props:['label','field'],
    data() {
      return {
        modal: false
      }
    },
    methods: {
        showDialog(){
            this.dialog=true
        }
    },
    computed: {
      fieldContent: {
        get () {
          return this.$store.state.record[this.field]
        },
        set (value) {
          this.$store.dispatch('updateRecord', [this.field,value])
        }
      }
    }
  }
</script>
