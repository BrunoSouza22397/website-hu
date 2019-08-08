<template>
    <div class="info container conteudo-info">
        <modal v-show="showModal" @close="showModal = false" title="Horários de Visita" ref="modalHorariosVisita">
            <div>
                Segunda a sexta: 00:00 - 00:00
                <br>
                Sábados, Domingos e feriados: 00:00 - 00:00
            </div>
        </modal>
        <modal v-show="showModal" @close="showModal = false" title="Horários de Atendimento" ref="modalHorariosAtendimento">
            <div>
                Segunda a sexta: 08:00 - 18:00
                <br>
                Sábados, Domingos e feriados: 08:00 - 18:00
            </div>
        </modal>

        <div class="tile info-title">
            <h1 class="title convenio-text">Informações</h1>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child">
                <h1 class="title is-size-4 has-text-primary">Visitantes</h1>
            </div>
            <div class="tile is-child">
                <h1 class="title is-size-4 has-text-primary">Pacientes</h1>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-size-5 is-child">
                <ul>
                    <li><router-link to="" @click.native="mostrarHorariosVisita()">Horários de visita</router-link></li>
                    <li>Informações relevantes aos visitantes</li>
                    <li>Endereço</li>
                    <li>etc</li>
                </ul>
            </div>
            <div class="tile is-size-5 is-child">
                <ul>
                    <li><router-link to="" @click.native="mostrarHorariosAtendimento()">Horários de Atendimento</router-link></li>
                    <li>Procedimentos Cirúrgicos</li>
                    <li>Especialidades Médicas</li>
                    <li>Convênios</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Info",
    data() {
        return {
            showModal: false,
        }
    },
    methods: {
        mostrarHorariosVisita() {
            this.$refs.modalHorariosVisita.show()
        },
        mostrarHorariosAtendimento() {
            this.modalHeader = "Horários de Atendimento"
            this.showModal = true
        }
    },
    components: {
        modal: require('@/components/modal.vue').default
    }
}
</script>

<!--MAPA-->
<!--
<div class="tile is-parent is-vertical map">
    <h1 class="title is-size-4">Endereço</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.227544427333!2d-51.16783507482214!3d-29.88654346221535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197012d8db0091%3A0x6f8ceb566f1799e7!2sHospital+Universit%C3%A1rio+de+Canoas!5e0!3m2!1spt-BR!2sbr!4v1563279057215!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <p class="">Av. Farroupilha, 8001 - São José, Canoas - RS, 92425-900</p>
</div>
-->

<!--CONVENIOS-->
<!--
<div class="container area-convenios has-text-centered column is-one-third has-background-primary has-text-white">
    <h1 class="title has-text-white">Convênios</h1>
    <div class="tile is-ancestor is-vertical">
        <div class="tile is-parent is-paddingless">
            <div class="tile convenio is-paddingless">
                <a href="https://www.unimedpoa.com.br/">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="../assets/img/logo-unimed.png" alt="unimed">
                            </figure>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tile convenio is-paddingless">
                <a href="http://www.centroclinicogaucho.com.br/">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="../assets/img/ccg.png" alt="unimed">
                        </figure>
                    </div>
                </div>
                </a>
            </div>

        </div>

        <div class="tile is-parent is-paddingless">
            <div class="tile convenio is-paddingless">
                <a href="http://credenciado.lifedaysaude.com.br/credenciado/#!/login">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="../assets/img/lifeDay.png" alt="unimed">
                        </figure>
                    </div>
                </div>
                </a>
            </div>
            <div class="tile convenio is-paddingless">
                <a href="http://www.canoasprev.rs.gov.br/">
                <div class="card card-prev">
                    <div class="card-image">
                        <figure class="image">
                            <img src="../assets/img/canoasPrev.png" alt="canoas prev">
                        </figure>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
-->