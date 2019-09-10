<template>
    <div class="card has-background-light">
        <div class="card-content">
            <div class="info">
                Season: <a :href="'../seasons/'+project.season.year_start">{{project.season.year_start}}/{{project.season.year_start+1}}</a>
            </div>
            <div class="info">
                Venue: {{project.venue.name}}
            </div>
            <div v-if="project.number_of_performances" class="info">
                Performances: {{project.number_of_performances}}
            </div>
            <div v-if="project.date_start" class="info">
                Performance Dates:<br>{{dateStart}} - {{dateEnd}}
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:['project'],
    data() {
      return {
        message: 'hello'
      }
    },
    computed: {
        dateStart(){
            var day = moment(this.project.date_start).format("D")
            var month = ''
            var year = ''
            if(
                moment(this.project.date_start).month()!==
                moment(this.project.date_end).month()
                ) {
                month = moment(this.project.date_start).format(" MMM")
            }
            if(
                moment(this.project.date_start).year()!==
                moment(this.project.date_end).year()
                ) {
                year = moment(this.project.date_start).format(" YYYY")
            }
            return day + month + year
        },
        dateEnd(){
            return moment(this.project.date_end).format("D MMM YYYY")
        }
    }
  }
</script>
<style scoped>
    .card-content {
        padding: 1rem;
    }
    .info {
        margin-bottom: 0.5rem;
    }
</style>
