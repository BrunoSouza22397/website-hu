import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import NotFound from './views/NotFound.vue'
import News from './views/News.vue'
import Contato from './views/Contato.vue'
import TrabalheConosco from './views/TrabalheConosco.vue'
import Cadastrado from './views/Cadastrado.vue'
import OrganogramaHU from './views/HU/Organograma.vue'
import OrganogramaHPSC from './views/HPSC/Organograma.vue'
import HistoricoHPSC from './views/HPSC/Historico.vue'

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
        path: "/news",
        name: "news",
        component: News
    },
    {
        path: "/contato",
        name: "contato",
        component: Contato
    },
    {
        path: "/trabalhe-conosco",
        name: "trabalhe-conosco",
        component: TrabalheConosco
    },
    {
        path: "/cadastrado",
        name: "cadastrado",
        component: Cadastrado
    },
    {
        path: "/organograma-hu",
        name: "OrganogramaHU",
        component: OrganogramaHU
    },
    {
        path: "/organograma-hpsc",
        name: "OrganogramaHPSC",
        component: OrganogramaHPSC
    },
    {
        path: "/historico-hpsc",
        name: "HistoricoHPSC",
        component: HistoricoHPSC
    }
]

/**Roteador */
export default new Router({
  routes: routes,
  mode: 'history',
})
