<template>
    <div class="info container conteudo-info">
        <!--Modais-->
        <modal title="Horários de Visita" v-show="showModalVisitas" @close="showModalVisitas = false">
            <div>
                Segunda a sexta: 00:00 - 00:00
                <br>
                Sábados, Domingos e feriados: 00:00 - 00:00
            </div>
        </modal>
        <modal title="Horários de Atendimento" v-show="showModalAtendimentos" @close="showModalAtendimentos = false">
            <div>
                Atendimento 24 horas!
            </div>
        </modal>
        <modal title="Endereço" v-show="showModalMapa" @close="showModalMapa = false">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.229592708359!2d-51.16806148434707!3d-29.886484430909096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197012d8db0091%3A0x6f8ceb566f1799e7!2sHospital+Universit%C3%A1rio+de+Canoas!5e0!3m2!1spt-BR!2sbr!4v1565294778837!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <br>
            <p class="has-text-weight-bold">Av. Farroupilha, 8001 - São José, Canoas - RS, 92425-900</p>
        </modal>
        <modal title="Convênios" v-show="showModalConvenios" @close="showModalConvenios = false">
            <div class="columns is-size-4">
                <ul class="column">
                    <li>Centro Clínico Gaúcho</li>
                    <li>Porto Alegre Clinicas</li>
                    <li>Unimed Porto Alegre</li>
                    <li>Agemed</li>
                    <li>Orizon</li>
                </ul>
                <ul class="column">
                    <li>Sulmed</li>
                    <li>CanoasPrev</li>
                    <li>LIFEDAY</li>
                    <li>Mais Unimed POA</li>
                    <li>Portal Unimed</li>
                </ul>
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
                    <li><router-link to="" @click.native="showModalVisitas = true">Horários de visita</router-link></li>
                    <li>Informações relevantes aos visitantes</li>
                    <li><router-link to="" @click.native="showModalMapa = true"> Endereço </router-link></li>
                    <li>etc</li>
                </ul>
            </div>
            <div class="tile is-size-5 is-child">
                <ul>
                    <li><router-link to="" @click.native="showModalAtendimentos = true">Horários de Atendimento</router-link></li>
                    <li>Procedimentos Cirúrgicos</li>
                    <li>Especialidades Médicas</li>
                    <li><router-link to="" @click.native="showModalConvenios = true"> Convênios</router-link></li>
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
            showModalVisitas: false,
            showModalAtendimentos: false,
            showModalMapa: false,
            showModalConvenios: false
        }
    },
    components: {
        modal: require('@/components/modal.vue').default
    }
}
</script>

<style lang="scss">
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>