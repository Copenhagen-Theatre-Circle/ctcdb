<template>
    <div>
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
    props: ['title'],
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
