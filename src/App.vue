<template>
    <div id="app">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <router-link class="navbar-item" to="/">
                    Início
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
                        HU
                    </a>

                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item">
                            Histórico
                        </a>
                        <router-link to="/organograma-hu">
                            <a class="navbar-item">
                                Organograma
                            </a>
                        </router-link>
                        <a class="navbar-item">
                            Diretoria
                        </a>
                        <a class="navbar-item">
                            Conselhos
                        </a>
                        <a class="navbar-item">
                            Missão, visão política e objetivo
                        </a>
                        <a class="navbar-item">
                            Unidades
                        </a>
                        <a class="navbar-item">
                            Setores
                        </a>
                    </div>
                </div>
                    <!--HPSC-->
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        HPSC
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
                        <a class="navbar-item">
                            Diretoria
                        </a>
                        <a class="navbar-item">
                            Conselhos
                        </a>
                        <a class="navbar-item">
                            Missão, visão política e objetivo
                        </a>
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
                </div>
                <div class="navbar-end"></div>
            </div>
        </nav>
    
        <router-view />

        <footer class="footer">
            <div class="content has-text-centered">
                <h1 class="title is-size-5 has-text-white-ter">Links úteis</h1>
                <div class="columns">
                    <div class="column is-half">
                        <p class="is-size-6 is-marginless">Página inicial</p>
                        <p class="is-size-6 is-marginless">Sobre nós</p>
                        <p class="is-size-6 is-marginless">Notícias</p>
                    </div>
                    <div class="column is-half">
                        <p class="is-size-6 is-marginless">Informações</p>
                        <p class="is-size-6 is-marginless">Responsabilidade Social</p>
                        <p class="is-size-6 is-marginless">Contato</p>
                    </div>
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

        /* Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyAK6n_hS6EbxFzQLhP0a4WSs_F3e3ZIZC4",
            authDomain: "website-hu.firebaseapp.com",
            databaseURL: "https://website-hu.firebaseio.com",
            projectId: "website-hu",
            storageBucket: "website-hu.appspot.com",
            messagingSenderId: "1006364106673",
            appId: "1:1006364106673:web:b27c383b2f4c78953fa790",
            measurementId: "G-DV1H1NKJWL"
        };
        // Initialize Firebase
        /*firebase.initializeApp(firebaseConfig);
        firebase.analytics();*/
    },
}
</script>
