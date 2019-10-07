<template>
    <object data="../../procSel.pdf" type="application/pdf"></object>
</template>

<script>
import PDFJS from "../../node_modules/pdfjs-dist/build/pdf.js"

export default {
    name: "PDFReader"
}
</script>

<style lang="scss" scoped>
object {
    width: 100%;
    min-height: 0rem;
}
</style>