<template>
    <div>
        <ul>
            <li v-if="person.public_bio">
                <a class="has-text-primary" href="#biography" data-turbolinks="false">Biography</a>
            </li>
            <li v-if="person.roles.length>0">
                 <a class="has-text-primary" href="#ascastmember" data-turbolinks="false">as Cast Member</a>
            </li>
            <li v-if="person.crewfunctions">
                 <a class="has-text-primary" href="#ascrewmember" data-turbolinks="false">as Crew Member</a>
            </li>
            <li v-if="person.phototags.length>0">
                 <a class="has-text-primary" href="#photographs" data-turbolinks="false">Photographs</a>
            </li>
        </ul>
    </div>
</template>
<script>
  export default {
    props:['person']
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
