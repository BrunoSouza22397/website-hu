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
            <tbody v-for="i in vagas[0]" :key="i.cod">
                <tr>
                    <td><div class="radio"><input type="radio" v-model="checked" name="vaga" :value="i.cod"></div></td>
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
            checked: '',
        }
    },
    watch: {
        checked: function(value) {
            this.$emit('isChecked', value)
        }
    },
    methods: {
        async getVagas() {
            const snapshot = await fb.vagasCollection.orderBy("cod").get()
            return snapshot.docs.map(doc => doc.data())        
        }
    },
    mounted() {
        this.getVagas().then(vaga => {
            this.vagas.push(vaga)
        })
    }
}
</script>