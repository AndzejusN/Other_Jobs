<template>
    <header class="py-3 px-5">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <RouterLink class="d-flex align-items-center text-dark text-decoration-none" :to="{name: 'count'}">
                <span class="fs-4 font-hand"><h1>Vegetarian food</h1></span>
            </RouterLink>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-auto">
                <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'count'}"><h5>Let's count</h5>
                </RouterLink>
                <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'menu'}"><h5>Week menu</h5>
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
