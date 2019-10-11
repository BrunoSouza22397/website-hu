<template>
    <div class="has-text-centered">
        <object data="../../procSel.pdf" type="application/pdf"></object>
    </div>
</template>

<script>
export default {
    name: "PDFReader"
}
</script>

<style lang="scss" scoped>
object {
    min-width: 60rem;
    min-height: 50rem;
}
</style>