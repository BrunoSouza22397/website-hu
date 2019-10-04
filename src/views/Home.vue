<template>
    <div class="index">
        <!--Start Hero Carousel-->
        <section class="hero is-large has-carousel container">
            <div class="hero-carousel">
                <div class='has-background is-active'>
                    <img class="is-background" src="../assets/img/hu.jpg" alt="imagem 1" />
                </div>
                <div class='has-background'>
                    <img class="is-background" src="../assets/img/hu2.jpg" alt="imagem 2" />
                </div>
                <div class='has-background'>
                    <img class="is-background" src="../assets/img/hu3.jpg" alt="imagem 3" />
                </div>
                <div class='has-background'>
                    <img class="is-background" src="../assets/img/hpsc.jpg" alt="imagem 4" />
                </div>
            </div>
            <div class="hero-head"></div>
            <div class="hero-body"></div>
        </section>
        <!--Fim Hero Carousel-->

        <!--SECTION DE NOTICIAS-->
        <div class="section has-text-centered">
            <h1 class="title">Últimas Notícias</h1>
           
           <div class="container columns">
                <div class="card column is-4">
                    <div class="card-header">
                        <p class="card-header-title is-size-4">Está aberto o processo seletivo de 2019!</p>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="is-size-5">Para mais Informações leia o <a href="../assets/procSel.docx" download>EDITAL</a>.</p>
                            <p class="is-size-5"><router-link to="/trabalhe-conosco">Clique aqui</router-link> para se inscrever.</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</template>

<script>
    import bulmaCarousel from '../../node_modules/bulma-carousel/dist/js/bulma-carousel.min.js'

    export default {
        name: 'home',
        mounted() {
            bulmaCarousel.attach('.hero-carousel', {
                slidesToScroll: 1,
                slidesToShow: 1,
                pagination: true,
                effect: 'fade',
                loop: true,
                autoplay: true,
                autoplaySpeed: 5000
             });
        }
    }
</script>

<style lang="scss" scoped>
.noticias {
    max-width: 50rem;
}
.card {
    background-color: white;
}
</style>
