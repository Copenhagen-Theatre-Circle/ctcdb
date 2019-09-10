<template>
    <div class="background has-background-light">
        <navbar-short></navbar-short>
        <navbar-social @show-newsletter-signup="showNewsletterSignup"></navbar-social>
        <navbar-tall></navbar-tall>
        <div class="container">
            <main>
                <slot></slot>
            </main>
        </div>
        <b-modal :active.sync="isNewsletterModalActive" has-modal-card>
            <newsletter-signup-modal />
        </b-modal>
    </div>
</template>

<script>
export default {
    props: [
    'title',
    'members'
    ],
    data() {
      return {
        isNewsletterModalActive: false
      }
    },
    mounted() {
        this.updatePageTitle(this.title)
    },
    watch: {
        title(title) {
            this.updatePageTitle(title)
        }
    },
    methods: {
        updatePageTitle(title) {
            document.title = title ? `CTC – ${title}` : `Copenhagen Theatre Circle`
        },
        showNewsletterSignup(){
            this.isNewsletterModalActive=!this.isNewsletterModalActive
        }
    },
}
</script>
<style scoped>
.background {
    min-height: 100%;
    padding-bottom: 1rem;
}
/*    .members {
        background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('../../../images/smoky-stage-advanced.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
    }*/
</style>
