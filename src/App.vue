<template>
    <div id="app">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <router-link to="/">
                    <img class="navbar-item is-shadowless" src="./assets/img/hu_logo.png">
                </router-link>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                <router-link to="/about" class="navbar-item">
                    <a class="navbar-item">
                        Sobre o Hospital Universitário
                    </a>
                </router-link>
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
                <router-link to="/responsabilidade" class="navbar-item">
                    <a class="navbar-item">
                        Responsabilidade Social
                    </a>
                </router-link>
                <router-link to="/contato" class="navbar-item">
                    <a class="navbar-item">
                        Contato
                    </a>
                </router-link>            
                </div>
                <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <router-link to="/trabalhe-conosco">
                            <a class="button is-primary">
                                <strong>Trabalhe Conosco</strong>
                            </a>
                        </router-link>
                    </div>
                </div>
                </div>
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
    name: 'App'
}
</script>
