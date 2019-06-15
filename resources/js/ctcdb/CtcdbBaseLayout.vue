<template>
    <div class="has-background-light ctcdb">
        <ctcdb-navbar/>
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
        min-height: 100vh;
        height: 100%;
    }
    @media only screen and (max-width: 768px) {
      .container {
            margin-top: 4rem !important;
        }
    }
</style>
