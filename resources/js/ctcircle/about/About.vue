<template>
    <base-layout title="Home">
      <section class="section">
        <div class="hero intro">
          <p class="has-text-white content is-size-6">
            Copenhagen Theatre Circle (CTC) is an amateur theatrical society founded in 1969. Our performances and events take place in English.
          </p>
          <p class="has-text-white content is-size-6">
            The CTC is open to all who have an interest in being on stage, working behind the scenes and supporting us in numerous other ways.
          </p>
          <p class="has-text-white content is-size-6">
            Click on the links and cards below to find out more about what we do, how we work and how you can participate.
          </p>
        </div>
        <br>
        <about-tabs :activeTab="panel" @selectTab="panel=$event"></about-tabs>
        <about-card-panel
          :data="data[panel-1]"
          :panel="panel"
          :linkTextLeft="linkTextLeft[panel-1]"
          :linkTextRight="linkTextRight[panel-1]"
          @selectTab="panel=$event"
          >
        </about-card-panel>
      </section>
    </base-layout>
</template>

<script>
  export default {
      data() {
        return {
          panel: 1,
          linkTextRight: [
            'read more about how we work',
            'read more about how you can participate',
            ''
            ],
          linkTextLeft: [
            '',
            'read more about what we do',
            'read more about how we work'
            ],
        }
      },
      props: ['data'],
  }
</script>

<style scoped>
  .intro{
    background-color: rgba(0, 0, 0, 0.5 );
    padding: 1.5rem;
    margin-top: 1rem;
  }
  a:hover{
    color:#d10f22;
    text-decoration: underline;
  }
  section {
    background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
    padding-top: 1rem;
    margin-top: 1rem;
  }
  p {
    line-height: 1;
  }
</style>
