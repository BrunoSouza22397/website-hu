<template>
    <div class="section">
        <div class="content has-text-centered">
            <img src="../assets/img/hu_logo.png">
            <div class="columns">
                <div class="column hour">
                    <div class="titleButton" @click="horarioHU = !horarioHU"><h1 class="title is-size-4"><i class="fa fa-angle-down fa-1x" aria-hidden="true"></i>Horários de Visita<i class="fa fa-angle-down fa-1x" aria-hidden="true"></i></h1></div>
                    <hr>
                    <div v-if="horarioHU == true" @click="horarioHU = false">
                        <p class="is-size-5"><b>Sala de Recuperação</b> - CID - 11h às 11h15 e 17 às 17h15</p>
                        <p class="is-size-5"><b>Sala de Recuperação</b> - Centro Cirúrgico - 20h às 20h30</p>
                        <p class="is-size-5"><b>CTI - Pediátrica</b> - Finais de semana, das 15h às 16h</p>
                        <p class="is-size-5"><b>CTI - Neonatal</b> - 9h às 17h(Avós e irmãos maiores de 12 anos)</p>
                        <p class="is-size-5"><b>Internação Pediátrica</b> - Das 15h às 16h</p>
                        <p class="is-size-5"><b>UTI Adulto</b> - Das 12h às 12h30 e das 17h às 17h30</p>
                        <p class="is-size-5"><b>Internação Adulto</b> - Segunda a Sexta, das 10h às 20h Finais de semana e feriados, das 10h às 12h e das 16h às 20h</p>
                        <p class="is-size-5"><b>Isolamento</b> - Das 9h às 10h e 18h às 19h</p>
                        <p class="is-size-5"><b>Maternidade-SUS</b> - Das 12h às 13h e das 18h às 19h</p>
                        <p class="is-size-5"><b>Convênios</b> - De segunda a sexta, das 10h às 20h. Finais de Semana e Feriados, das 9h às 11h e das 15h às 19h</p>
                        <p class="is-size-5"><b>SUS</b> - De segunda a sexta, das 10h às 20h. Finais de semana e feriados, das 10h às 12h e das 16h às 20h</p>
                        <p class="is-size-5"><b>Convênios</b> - De segunda a sexta, das 10h às 20h. Finais de semanas, das 9h às 11h e das 15h às 19h</p>
                        <p class="is-size-5"><b>Saúde Mental</b> - Quarta-feira das 10h às 11h e das 15h às 16h. Domingo das 14h às 15h.</p>
                    </div>
                </div>
                <div class="column is-half">
                    <h1 class="title is-size-4 ">Localização</h1>
                    <div class="columns is-gapless">
                    <div class="column">
                        <p class="is-size-4">Av. Farroupilha, 8001 - São José, Canoas - RS, 92425-900</p>
                    </div>
                    </div>
                    
                </div>
            </div>
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=hospital%20universitario%20canoas&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <hr>

            <img src="../assets/img/logoHPSC.png" class="img">
            <div class="columns">
                <div class="column hour is-half">
                    <div class="titleButton" @click="horarioHPSC = !horarioHU"><h1 class="title is-size-4"><i class="fa fa-angle-down fa-1x" aria-hidden="true"></i>Horários de Visita<i class="fa fa-angle-down fa-1x" aria-hidden="true"></i></h1></div>
                    <hr>
                    <p class="is-size-5"></p>
                </div>
                <div class="column is-half">
                    <h1 class="title is-size-4">Localização</h1>
                    <div class="columns is-gapless">
                    <div class="column">
                        <p class="is-size-4">R. Florianópolis, 1611 - Mathias Velho, Canoas - RS, 92330-500</p>
                    </div>
                    </div>
                </div>
            </div>
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=hpsc&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

        </div>
    </div>
</template>

<script>
export default {
    name: "Informacoes",
    data() {
        return {
            horarioHU: false,
            horarioHPSC: false
        }
    }
}
</script>

<style lang="scss" scoped>
.mapouter {
    position:inherit;
    text-align:right;
    height:fit-content;
    width:fit-content;
}
.gmap_canvas {
    overflow:hidden;
    background:none!important;
    height:fit-content;
    width:fit-content;
}
#gmap_canvas {
    position: relative;
    width: 500rem;
    height: 30rem;
}
.hour {
    background-color: #1565c0;
    color: white;
}
.hour .title {
    color: white;
}
img {
    max-width: 20rem;
    box-shadow: none;
    margin-bottom: 1rem;
}
.titleButton, .titleButton h1, .titleButton i {
    cursor: pointer;
}
</style>