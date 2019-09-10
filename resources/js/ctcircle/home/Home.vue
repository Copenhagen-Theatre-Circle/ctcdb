<template>
        <base-layout title="Home" id="div" >
          <section class="section has-background-white">
            <div style="height: 01rem"></div>
            <base-carousel></base-carousel>
            <hr>
                <div class="hero is-transparent" style="border-bottom: 1px grey solid; margin-bottom: 10px; padding-bottom: 0px;">
                    <div class="columns header">
                        <div class="column">
                            <h1 class="title is-size-3" style="padding-left: 10px;">Calendar<span v-if="eventFilter!='all'">: {{eventFilter}}</span></h1>
                        </div>
                        <div class="column">
                            <div class="field is-horizontal is-pulled-right">
                                <div class="field-label is-normal">
                                   <label class="label has-text-dark">Filter Events:</label>
                                 </div>
                                <div class="select">
                                  <select v-model="eventFilter">
                                    <option>all</option>
                                    <option v-for="eventtype in eventtypes" :key="eventtype.id" :value="eventtype.name">{{eventtype.name}}<span v-if="eventtype.name!=='Open Stage'">s</span></option>
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns events is-multiline">
                    <flip-card v-for="event in filteredEvents" :key="event.id" :event="event"></flip-card>
                </div>
            </section>
        </base-layout>
</template>

<style scoped>
    .events {
        padding-bottom: 3rem;
        padding-top: 1rem;
    }
    .header {
        margin-bottom: 0.5rem;
    }
    hr {
        height: 1px;
        background-color: grey;
    }
    #div {
        animation: fadein 0s;
    }
    @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    section {
      padding-top: 1rem;
      margin-top: 1rem;
      padding-bottom: 1rem;
    }
</style>

<script>
export default {
    props: ['events','eventtypes'],
    data(){
      return{
        eventFilter: 'all',
        intro: true
      }
    },
    computed:{
        filteredEvents(){
            if (this.eventFilter=="all") return this.events;
            return this.events.filter(e=>e.eventtype === this.eventFilter)
        },
    },
    mounted() {
        setTimeout(function () { this.intro = false }.bind(this), 5000)
    },
}
</script>
