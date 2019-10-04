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
import Informacoes from './views/Info.vue'
import MissaoHU from './views/HU/Missao.vue'
import MissaoHPSC from './views/HPSC/Missao.vue'
import UnidadesHU from './views/HU/Unidades.vue'
import DiretoriaHU from './views/HU/Diretoria.vue'
import DiretoriaHPSC from './views/HPSC/Diretoria.vue'
import HistoricoHU from './views/HU/Historico.vue'

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
    },
    {
        path: "/info",
        name: "Informacoes",
        component: Informacoes
    },
    {
        path: "/missao-hu",
        name: "MissaoHU",
        component: MissaoHU
    },
    {
        path: "/missao-hpsc",
        name: "MissaoHPSC",
        component: MissaoHPSC
    },
    {
        path: "/unidades-hu",
        name: "UnidadesHU",
        component: UnidadesHU
    },
    {
        path: "/diretoria-hu",
        name: "DiretoriaHU",
        component: DiretoriaHU
    },
    {
        path: "/diretoria-hpsc",
        name: "DiretoriaHPSC",
        component: DiretoriaHPSC
    },
    {
        path: "/historico-hu",
        name: "HistoricoHU",
        component: HistoricoHU
    }
]

/**Roteador */
export default new Router({
  routes: routes,
  mode: 'history',
})
