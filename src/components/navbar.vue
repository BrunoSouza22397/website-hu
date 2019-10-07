<template>
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
                        <img src="../assets/img/hu_logo.png" id="logotipoHU">
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
                    </div>
                </div>
                <!--HPSC-->
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <img src="../assets/img/logoHPSC.png" id="logotipoHPSC">
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
                        <router-link to="/missao-hpsc">
                            <a class="navbar-item">
                                Missão, visão política e objetivo
                            </a>
                        </router-link>
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
                        <router-link to="/contato">
                            <a class="navbar-item">
                                Ouvidoria
                            </a>
                        </router-link>

                        <hr class="navbar-divider">
                        <router-link to="/processo-seletivo">
                            <a class="navbar-item">
                                Processo Seletivo
                            </a>
                        </router-link>

                        <router-link to="/trabalhe-conosco">
                            <a class="navbar-item">
                                Trabalhe Conosco
                            </a>
                        </router-link>
                    
                    </div>
                </div>

                <Router-link to="/pdf-reader" class="navbar-item">
                    <a class="navbar-item">
                        Edital Processo Seletivo
                    </a>
                </router-link>
                
            </div>
            <div class="navbar-end">
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style lang="scss" scoped>
#logotipoHU {
   box-shadow: none; 
   max-height: 4rem;
}
#logotipoHPSC {
    box-shadow: none; 
    max-height: 3rem;
}
</style>