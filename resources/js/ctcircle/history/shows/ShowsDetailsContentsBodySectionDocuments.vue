<template>
    <div>
        <table class="table is-bordered">
            <tr v-for="document in project.documents">
                <td>{{document.documenttype.name}}</td>
                <td><a :href="'https://ctc-members.dk/files/' + document.file_name" target="_blank">{{ document.original_file_name }}</a></td>
            </tr>
        </table>
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
    methods: {

    }
  }
</script>
<style scoped></style>
