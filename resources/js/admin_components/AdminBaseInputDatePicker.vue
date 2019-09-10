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
        v-model="computedDateFormattedMomentjs"
        :label="label"
        prepend-icon="event"
        readonly
        v-on="on"
      ></v-text-field>
    </template>
    <v-date-picker v-model="fieldContent" scrollable>
      <v-spacer></v-spacer>
      <v-btn flat color="primary" @click="modal = false">Cancel</v-btn>
      <v-btn flat color="primary" @click="$refs.dialog.save(fieldContent)">OK</v-btn>
    </v-date-picker>
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
      },
      computedDateFormattedMomentjs () {
        return this.fieldContent ? moment(this.fieldContent).format('dddd, Do of MMMM YYYY') : ''
      },
    }
  }
</script>
