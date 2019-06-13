<template>
    <div class="has-background-light ctcdb">
        <ctcdb-navbar-short/>
        <ctcdb-navbar-tall/>
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
    .ctcdb {
        height: 100%;
    }
</style>
