<template>
  <div>
      <v-list-tile
        @click="selectRecord(id)"
        :value="id==activeRecordId"
        active-class="primary lighten-7 white--text"
      >
        <v-list-tile-avatar>
          <v-btn class="elevation-2" fab small color="grey lighten-3">
            <v-icon color="primary darken-1" v-if="record.icon">fa-{{record.icon}}</v-icon>
          </v-btn>
        </v-list-tile-avatar>
        <v-list-tile-content>
          <v-list-tile-title v-if="record[titleFieldName]" v-html="record[titleFieldName]" />
          <v-list-tile-sub-title v-if="record[subtitleFieldName]" v-html="record[subtitleFieldName]" :class="{'white--text': id==activeRecordId}" />
        </v-list-tile-content>
      </v-list-tile>
      <v-divider inset></v-divider>
  </div>
</template>
<script>
  export default {
    props:['record','configData'],
    computed: {
        activeRecordId(){
          return this.$store.state.record_id
        },
        titleFieldName(){
            return this.configData.listComponents.title
        },
        subtitleFieldName(){
            return this.configData.listComponents.subtitle
        },
        id(){
            return this.record['id']
        }
    },
    methods: {
      selectRecord(id){
        this.$store.dispatch('selectRecord',id)
        this.$store.dispatch('loadRecord',[this.configData.endpoint,id])
      }
    }
  }
</script>
