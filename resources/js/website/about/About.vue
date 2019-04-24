<template>
    <base-layout title="Home">
        <div>
            <div class="hero intro">
              <p class="has-text-white content is-size-6">
                Copenhagen Theatre Circle (CTC) is an amateur theatrical society founded in 1969. Our performances and events take place in English.
              </p>
              <p class="has-text-white content is-size-6">
                The CTC is open to all who have an interest in being on stage, working behind the scenes and supporting us in numerous other ways.
              </p>
              <p class="has-text-white content is-size-6">
                You can click on the cards below to find out more about <a href="#what">what we do</a>, <a href="#how">how we work</a> and <a href="#help">how you can participate</a>.
              </p>
            </div>
            <div v-for="category in data">
                <h1 class="title is-size-3 has-text-white" style="margin: 1rem 0rem 0rem 0.6rem;">{{category.name}}</h1>
              <br>
              <div class="columns is-multiline">
                  <modal-card
                    v-for="card in category.about_us_cards"
                    :key="card.id"
                    :title="card.title"
                    :text="card.text"
                    :image="card.photograph"
                    >
                  </modal-card>
              </div>
            </div>
            <br>
        </div>
    </base-layout>
</template>

<script>
  export default {
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
</style>
