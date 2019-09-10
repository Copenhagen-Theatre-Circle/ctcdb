<template>
  <div>
    <vue2-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" @vdropzone-complete="afterComplete"></vue2-dropzone>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        dropzoneOptions: {
              url: 'https://ctc-members.dk/upload-photo',
              thumbnailWidth: 400,
              maxFilesize: 10,
              headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'event_id': 12345,
                }
          },
        response: null,
      }
    },
    methods:{
      afterComplete(response){
        var output = JSON.parse(response.xhr.response)
        output = output.id
        this.$store.commit('ADD_PHOTOGRAPH_ID_TO_FORM_DATA',output)
        this.$store.commit('SET_UNSAVED_CHANGES',true)
      }
    }
  }
</script>
<style scoped></style>
