<template>
  <div>
      <div class="columns is-multiline">
          <modal-card
            v-for="card in data.about_us_cards"
            :key="card.id"
            :title="card.title"
            :text="card.text"
            :image="card.photograph"
            >
          </modal-card>
      </div>
      <div>
        <a
          class="is-pulled-left"
          @click="$emit('selectTab', panelLinkBack)"
          v-if="linkTextLeft.length>0"
          >
          <i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp;{{linkTextLeft}}
        </a>
        <a
          class="is-pulled-right"
          @click="$emit('selectTab', panelLinkForward)"
          v-if="linkTextRight.length>0"
          >
          {{linkTextRight}}&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>
        </a>
        <br>
      </div>
  </div>
</template>
<script>
  export default {
    props:['data','panel','linkTextLeft','linkTextRight'],
    computed: {
      panelLinkForward(){
          return this.panel + 1
      },
      panelLinkBack(){
          return this.panel - 1
      },
    }
  }
</script>
<style scoped>
</style>
