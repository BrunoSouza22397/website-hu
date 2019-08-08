import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import NotFound from './views/NotFound.vue'
import News from './views/News.vue'
import Info from './views/Info.vue'

Vue.use(Router)

/**Rotas */
const routes = [
    {
        path: '*',
        name: 'notFound',
        component: NotFound
    },
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: "/news",
        name: "news",
        component: News
    },
    {
        path: "/info",
        name: "info",
        component: Info
    }
]

/**Roteador */
export default new Router({
  routes: routes,
  mode: 'history',
})
