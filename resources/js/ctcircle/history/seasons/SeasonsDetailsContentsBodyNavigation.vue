<template>
    <div>
        <ul>
            <li v-if="season.projects">
                <a class="has-text-primary" href="#productions" data-turbolinks="false">Productions</a>
            </li>
            <li v-if="season.committee_members">
                 <a class="has-text-primary" href="#committeemembers" data-turbolinks="false">Committee Members</a>
            </li>
        </ul>
    </div>
</template>
<script>
  export default {
    props:['season']
  }
</script>
<style scoped>
    a::before {
        content: "#";
        margin-right: 0.7rem;
        color: #f9aeb5;
    }
    .indent {
      margin-left: 1.2rem;
      line-height: 16px;
    }
</style>
