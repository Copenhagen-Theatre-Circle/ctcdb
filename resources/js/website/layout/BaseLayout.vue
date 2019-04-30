<template>
    <div :class="{members: members}">
        <navbar-short></navbar-short>
        <navbar-social></navbar-social>
        <navbar-tall></navbar-tall>
        <div class="container">
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
export default {
    props: [
    'title',
    'members'
    ],
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
        }
    },
}
</script>
<style scoped>
    .members {
        background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('../../../images/smoky-stage-advanced.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
    }
</style>
