<template>
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
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style lang="scss" scoped>
.footer p {
    color: white;
}
</style>