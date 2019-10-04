<template>
    <div id="app">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <router-link class="navbar-item" to="/">
                    <i class="fa fa-home home-icon fa-3x"></i>
                </router-link>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <!--HU-->
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <img src="./assets/img/hu_logo.png" id="logotipo">
                        </a>

                        <div class="navbar-dropdown is-boxed">
                            <router-link to="/historico-hu">
                                <a class="navbar-item">
                                    Histórico
                                </a>
                            </router-link>
                            <router-link to="/organograma-hu">
                                <a class="navbar-item">
                                    Organograma
                                </a>
                            </router-link>
                            <router-link to="/diretoria-hu">
                                <a class="navbar-item">
                                    Diretoria
                                </a>
                            </router-link>
                            <a class="navbar-item">
                                Conselhos
                            </a>
                            <router-link to="/missao-hu">
                                <a class="navbar-item">
                                    Missão, visão política e objetivo
                                </a>
                            </router-link>
                            <router-link to="/unidades-hu">
                                <a class="navbar-item">
                                    Unidades
                                </a>
                            </router-link>
                            <a class="navbar-item">
                                Setores
                            </a>
                        </div>
                    </div>
                    <!--HPSC-->
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <img src="./assets/img/logoHPSC.png" id="logotipo">
                        </a>

                        <div class="navbar-dropdown is-boxed">
                            <router-link to="/historico-hpsc">
                                <a class="navbar-item">
                                    Histórico
                                </a>
                            </router-link>
                            <router-link to="/organograma-hpsc">
                                <a class="navbar-item">
                                    Organograma
                                </a>
                            </router-link>
                            <router-link to="/diretoria-hpsc">
                                <a class="navbar-item">
                                    Diretoria
                                </a>
                            </router-link>
                            <a class="navbar-item">
                                Conselhos
                            </a>
                            <router-link to="/missao-hpsc">
                                <a class="navbar-item">
                                    Missão, visão política e objetivo
                                </a>
                            </router-link>
                            <a class="navbar-item">
                                Unidades
                            </a>
                            <a class="navbar-item">
                                Setores
                            </a>
                        </div>
                    </div>

                    <router-link to="/news" class="navbar-item">
                        <a class="navbar-item">
                            Notícias
                        </a>
                    </router-link>
                    <router-link to="/info" class="navbar-item">
                        <a class="navbar-item">
                            Informações
                        </a>
                    </router-link>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Contato
                        </a>

                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item">
                                Fornecedores
                            </a>
                            <a class="navbar-item">
                                <router-link to="/contato">
                                    Ouvidoria
                                </router-link>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <router-link to="/trabalhe-conosco">
                                    Trabalhe Conosco
                                </router-link>
                            </a>
                        </div>
                    </div>

                    
                    <a href="./assets/procSel.pdf" class="navbar-item" download>
                        Edital Processo Seletivo
                    </a>
                    
                </div>
                <div class="navbar-end">
                </div>
            </div>
        </nav>
    
        <router-view />

        <footer class="footer">
            <div class="content has-text-centered">
                <h1 class="title is-size-5 has-text-white-ter">Links úteis</h1>
                
                <div class="columns has-text-centered">
                    <div class="column is-4"></div>
                    <div class="column is-2">
                        <hr>
                        <router-link to="/"><p class="is-size-6 is-marginless">Página inicial</p></router-link>
                        <router-link to="/news"><p class="is-size-6 is-marginless">Notícias</p></router-link>
                    </div>
                    <div class="column is-2">
                        <hr>
                        <router-link to="/info"><p class="is-size-6 is-marginless">Informações</p></router-link>
                        <router-link to="/contato"><p class="is-size-6 is-marginless">Contato</p></router-link>
                    </div>
                    <div class="column is-4"></div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: 'App',
    mounted() {
        let firebaseApp = document.createElement('script')
        firebaseApp.setAttribute('src', 'https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js')
        document.body.appendChild(firebaseApp)
    },
}
</script>

<style lang="scss" scoped>
#logotipo {
   box-shadow: none; 
   max-height: 4rem;
}
.footer p {
    color: white;
}
.is-half p{
    max-width: fit-content;
}
</style>
