<template>
    <object width="100%" data="../assets/procSel.pdf" type="application/pdf"></object>
</template>

<script>
import PDFJS from "../../node_modules/pdfjs-dist/build/pdf.js"

export default {
    name: "PDFReader",
    data() {
        return {
            documentPath: ''
        }
    },
    methods: {
        async loadDocument() {
            const loadingTask = PDFJS.getDocument(this.documentPath);
            const pdf = await loadingTask.promise;

            // Load information from the first page.
            const page = await pdf.getPage(1);

            const scale = 1;
            const viewport = page.getViewport(scale);

            // Apply page dimensions to the <canvas> element.
            const canvas = document.getElementById("pdf");
            const context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render the page into the <canvas> element.
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            await page.render(renderContext);
            console.log("Page rendered!");
        },
        setDocument() {
            let url = new URL(window.location.href)
            let document = url.searchParams.get("document")
            this.documentPath = document
        }
    },
    mounted() {
        //adicionando script do pdf.js
        /*
        let pdfjs = document.createElement("script")
        pdfjs.setAttribute('src', '../../node_modules/pdfjs-dist/build/pdf.js')
        document.body.appendChild(pdfjs)
        

       this.setDocument()
       this.loadDocument()
       */

    }
}
</script>