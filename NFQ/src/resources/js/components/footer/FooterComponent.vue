<template>
    <footer class="py-3 px-5">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center pb-3 mb-4 border-top">
        <nav class="d-inline-flex">
            <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'company'}"><h5>NFQ</h5></RouterLink>
            <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'work'}"><h5>Work</h5></RouterLink>
            <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'about'}"><h5>About me</h5></RouterLink>
        </nav>
    </div>
    </footer>
</template>

<script>
export default {
    name: "FooterComponent"
}
</script>

<style scoped>
</style>
