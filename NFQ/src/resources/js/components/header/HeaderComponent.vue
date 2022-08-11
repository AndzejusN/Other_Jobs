<template>
    <header class="py-3 px-5">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <RouterLink class="d-flex align-items-center text-dark text-decoration-none" :to="{name: 'index'}">
                <span class="fs-4"><h1><i>Project management</i></h1></span>
            </RouterLink>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-auto">
                <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'index'}"><h5>Project main</h5>
                </RouterLink>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "HeaderComponent"
}
</script>

<style scoped>
</style>
