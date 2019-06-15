<template>
    <div class="columns is-multiline">
        <div class="column is-3" v-for="committee_member in season.committee_members">
            <div class="card">
                <div class="card-image">
                    <img
                        v-if="committee_member.person.portraits.length > 0"
                        :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_400,h_400,c_fill,g_face/https://ctc-members.dk/media/' + committee_member.person.portraits[0].file_name" alt=""
                    >
                    <img
                        v-else
                        :src="'https://res.cloudinary.com/ctcircle/image/fetch/w_400,h_400,c_fill,g_face/https://ctc-members.dk/media/unisex_silhouette.png'" alt=""
                    >
                </div>
                <div class="card-content">
                    <p class="title is-4"><a :href="'/people/'+committee_member.person.id">{{committee_member.person.first_name}} {{committee_member.person.last_name}}</a></p>
                    <p class="subtitle is-6">{{committee_member.committee_function.name}}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:['season'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    .card-content{
        padding: 1rem;
    }
</style>
