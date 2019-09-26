<template>
    <div id="table" class="table-container">
        <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th v-if="formulario">Opção</th>
                    <th>Código da Função</th>
                    <th>Função</th>
                </tr>
            </thead>
            <tbody v-for="i in vagas[0]">
                <tr>
                    <td><div class="checkbox"><input type="checkbox" @click="setChecked(i.cod, $event)"></div></td>
                    <td>{{ i.cod }}</td>
                    <td>{{ i.funcao }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
const fb = require('../firebaseConfig.js')

export default {
    name: "TableVagas",
    props: {
        formulario: Boolean
    },
    data() {
        return {
            vagas: [],
            checked: [],
        }
    },
    methods: {
        async getVagas() {
            const snapshot = await fb.vagasCollection.orderBy("cod").get()
            return snapshot.docs.map(doc => doc.data())        
        },
        setChecked(cod, event) {
            if(event.target.checked){
                this.checked.push(cod)
            }else{
                let index = this.checked.indexOf(cod)
                if(index > -1) {
                    this.checked.splice(index, 1)
                }
            }
        }
    },
    mounted() {
        this.getVagas().then(vaga => {
            this.vagas.push(vaga)
        })
        console.log(this.vagas)
    }
}
</script>