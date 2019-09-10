<template>
    <div>
        <!-- Progress Spinner -->
        <div class="text-xs-center pt-5" v-if="loading" :style="{height: height}">
            <v-progress-circular
              :size="50"
              color="primary"
              indeterminate
            />
        </div>
        <!-- List-->
        <v-list two-line class="scroll-y" :style="{height: height}" v-if="!loading">
            <!-- Filter -->
            <div class="white">
                <v-text-field
                  :label="'filter ' + configData.endpoint "
                  prepend-inner-icon="search"
                  class="pl-3 pr-3"
                  v-model="filter"
                ></v-text-field>
                <v-divider class="pt-0"></v-divider>
            </div>
            <!-- Records -->
            <admin-content-list-records-entry
                v-for="(record, index) in records"
                v-if="
                    filter==''
                    || (record[title] !== null && record[title].toLowerCase().includes(filter.toLowerCase()))
                    || (record[subtitle] !== null && record[subtitle].toLowerCase().includes(filter.toLowerCase())) 
                    "
                :record="record"
                :key="index"
                :configData="configData"
            />
        </v-list>
    </div>
</template>
<script>
  import axios from 'axios'
  export default {
    props:{
        configData:{},
        selectedTabQuery:{
            default: ''
        }
    },
    data() {
      return {
        records:'',
        filter:'',
      }
    },
    computed: {
        height() {
            var tabsPanelHeight = this.configData.listTabs ? 56 : 0
            var newRecordPanelHeight = this.configData.createRecord ? 62 : 0
            var height = 64 + tabsPanelHeight + newRecordPanelHeight
            return 'calc(100vh - ' + height + 'px)'
        },
        title(){
            return this.configData.listComponents.title
        },
        subtitle(){
            return this.configData.listComponents.subtitle
        },
        loading(){
            return this.records.length == 0
        }
    },
    mounted () {
        const self=this
        axios
          .get('/admin-api/' + self.configData.endpoint + self.selectedTabQuery)
          .then(response => (
                setTimeout(function(){self.records = response.data}, 300)
            ))
    }
  }
</script>
<style scoped></style>
