<template>
    <div id="app">
 
        <navbar />
    
        <router-view />

        <footer-app />

    </div>
</template>

<script>
import Footer from '@/components/footer.vue'
import Navbar from '@/components/navbar.vue'

export default {
    name: 'App',
    mounted() {
        let firebaseApp = document.createElement('script')
        firebaseApp.setAttribute('src', 'https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js')
        document.body.appendChild(firebaseApp)
    },
    components: {
        'navbar': Navbar,
        'footer-app': Footer
    },
}
</script>

<style lang="scss" scoped>
.is-half p{
    max-width: fit-content;
}
</style>
