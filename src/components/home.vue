<template>
    <div class="index">
        <!--Start Hero Carousel-->
        <section class="hero is-large has-carousel">
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
            </div>
            <div class="hero-head">
                <section class="section home-banner is-absolute">
                    <h1 class="title has-text-white is-size-1">Hospital Universitário de Canoas</h1>
                </section>
            </div>
            <div class="hero-body"></div>
        </section>
        <!--Fim Hero Carousel-->

        <!--SECTION DE NOTICIAS-->
        <section class="section has-text-centered">
            <h1 class="title">Últimas Notícias</h1>
            <div class="tile is-ancestor level">
            
                <!--PRIMEIRO TILE-->
                <div class="tile level-item">
                    <div class="card is-centered">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="../assets/img/vacina.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Vacinação contra a gripe no SUS é aberta para toda a população</p>
                                </div>
                            </div><!--Fecha media-->
                            <div class="content">
                                A partir desta segunda-feira (3), doses restantes estarão disponíveis em todas as unidades de saúde sem exclusividade para o grupo prioritário. 4,2 milhões de gestantes e crianças ainda precisam tomar a vacina.
                                <br>
                                <time datetime="2019-7-9" class="has-text-weight-semibold">11:09 - 9 Jul 2019</time>
                            </div>
                        </div>
                    </div><!--Fecha Card-->
                </div>

                <!--SEGUNDO TILE-->
                <div class="tile level-item">
                    <div class="card is-centered">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="../assets/img/hospcanoas.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Hospitais de Canoas receberão 4 mil itens de roupas de cama</p>
                                </div>
                            </div><!--Fecha media-->
                            <div class="content">
                                Pacientes que necessitarem de atendimento nos hospitais de Pronto Socorro de Canoas (HPSC) e Universitário (HU) irão perceber, já a partir dos próximos dias, melhorias nas acomodações.
                                <br>
                                <time datetime="2019-7-9" class="has-text-weight-semibold">11:09 - 9 Jul 2019</time>
                            </div>
                        </div>
                    </div><!--Fecha Card-->
                </div>
                
                <!--TERCEIRO TILE-->
                <div class="tile level-item">
                    <div class="card is-centered">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="../assets/img/calendario.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Calendário Nacional de Vacinação</p>
                                </div>
                            </div><!--Fecha media-->
                            <div class="content">
                                Calendario de vacinação oficial de acordo com ministério da saúde.
                                <br>
                                <time datetime="2019-7-9" class="has-text-weight-semibold">11:09 - 9 Jul 2019</time>
                            </div>
                        </div>
                    </div><!--Fecha Card-->
                </div>

            </div>
        </section>
        <!--FIM SECTION DE NOTICIAS-->
    </div>
</template>

<script>
    import bulmaCarousel from '../../node_modules/bulma-carousel/dist/js/bulma-carousel.min.js'

    export default {
        name: 'Index',
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
