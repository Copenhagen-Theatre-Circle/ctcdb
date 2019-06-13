<template>
    <header class="card-header has-background-dark">
      <div class="columns is-mobile" style="width: 100%;">
        <div class="column">
          <p class="card-header-title has-text-white" id="eventname">
            {{event.name}}
          </p>
          <p class="card-header-title has-text-white is-size-7" style="padding-top: 0.3rem;">
            {{event.location}}
          </p>
        </div>
        <div class="column is-narrow">
          <div style="padding-top: 10px; padding-bottom: 10px;">
            <div class="is-size-7 has-text-white">{{weekday}}</div>
            <div class="is-size-6 has-text-white">{{day}} {{month}}</div>
            <div class="is-size-7 has-text-white">{{event.time.substr(0,5)}}</div>
          </div>
        </div>
      </div>
    </header>
</template>

<script>
  export default {
    props:['event'],
    data() {
      return {
        message: 'hello',
        days: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
        months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
      }
    },
    computed: {
        dateObject() {
          return new Date (this.event.date)
        },
        weekday() {
          return this.days[this.dateObject.getDay()]
        },
        month() {
          return this.months[this.dateObject.getMonth()]
        },
        day() {
          return this.dateObject.getDate()
        }
    }
  }
</script>

<style scoped>
  #eventname {
    margin-bottom: 0rem;
    padding-bottom: 0rem;
  }
  .location {
    margin-top: 0rem;
    padding: 0rem !important;
  }
</style>
