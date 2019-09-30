<template>
    <div class="section">
        <div class="container has-text-centered">
            <p class="greeting">
            Ficamos felizes que você esteja interessado em trabalhar conosco! <br>
            Para participar do nosso processo seletivo preencha o formulário abaixo.<br>
            Entraremos em contato com você caso seja selecionado para alguma vaga.
            </p>

            <form @submit.prevent id="form-cadastro">
            
                <h1 class="title">Formulário de Inscrição</h1>
                <hr>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="name">Nome Completo</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input" type="text" id="name" v-model="candidato.nome"/>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="nomePai">Nome do pai</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input" type="text" id="nomePai" v-model="candidato.nomePai"/>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="nomeMae">Nome da mãe</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input" type="text" id="nomeMae" v-model="candidato.nomeMae"/>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Data de Nascimento</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-horizontal">
                            <p class="control">
                                <input class="input" min="1" max="31" type="number" id="diaNasc" v-model="candidato.dataNasc.dia" placeholder="dia"/>
                            </p>
                            <p class="control">
                                <input type="number" min="01" max="12" class="input" id="mesNasc" v-model="candidato.dataNasc.mes" placeholder="mes"/>
                            </p>
                            <p class="control">
                                <input type="number" min="1939" max="2001" class="input" id="anoNasc" v-model="candidato.dataNasc.ano" placeholder="ano"/>
                            </p>    
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Idade</label>
                            </div>
                            <p class="control">
                                <input type="number" min="18" max="80" class="input" id="idade" v-model="candidato.idade" :disabled="true"/>
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">CPF</label>
                            </div>
                            <p class="control">
                                <input type="text" class="input" id="cpf" v-model="candidato.cpf">
                            </p>
                        </div>   

                    </div>
                </div>
                
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">RG</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input type="text" class="input" id="rg" v-model="candidato.rg.registro">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Data de Emissão</label>
                            </div>
                            <div class="field is-horizontal">
                                <p class="control">
                                    <input class="input" min="1" max="31" type="number" id="diaEmissao" v-model="candidato.rg.dataEmissao.dia" placeholder="dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissao" v-model="candidato.rg.dataEmissao.mes" placeholder="mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissao" v-model="candidato.rg.dataEmissao.ano" placeholder="ano"/>
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Órgão Emissor/UF</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <input type="text" maxlength="2" id="rgUf" class="input" v-model="candidato.rg.orgaoEmissor">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Título de Eleitor</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded">
                                <input type="text" class="input" id="tituloEleitor" v-model="candidato.tituloEleitor.numero">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Data Emissão</label>
                            </div>
                            <div class="field-body">
                                <p class="control">
                                    <input class="input" min="1" max="31" type="number" id="diaEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.dia" placeholder="dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.mes" placeholder="mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.ano" placeholder="ano"/>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Zona</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="text" class="input" id="zonaTituloEleitor" v-model="candidato.tituloEleitor.zona">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Sessão</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="sessaoTituloEleitor" v-model="candidato.tituloEleitor.sessao">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="field is-horizontal">
                    <div class="field-label">
                        <label for="" class="label">Nº do Cartão Nacional de Saúde(CNS)</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="text" class="input" id="numCns" v-model="candidato.cns">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Endereço(Rua, Av.)</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="text" id="ruaEndereco" class="input" v-model="candidato.endereco.rua">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Nº</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input type="number" id="numEndereco" class="input" v-model="candidato.endereco.numero">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Bairro</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input type="text" class="input" id="bairroEndereco" v-model="candidato.endereco.bairro">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Cidade</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="cidadeEndereco" v-model="candidato.endereco.cidade">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">E-Mail</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="email" class="input" id="email" v-model="candidato.contato.email">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Telefone Celular</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="text" class="input" id="telefone" v-model="candidato.contato.telefone1">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            
                            <div class="field-label is-normal">
                                <label for="" class="label">Outros</label>
                            </div>

                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="outroTelefone" v-model="candidato.contato.telefone2">
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Escolaridade</label>
                    </div>
                    <div class="field-body">
                            <div class="field is-horizontal">
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Fundamental Incompleto" v-model="candidato.escolaridade.nivel">
                                    Ensino Fundamental Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Fundamental Completo" v-model="candidato.escolaridade.nivel">
                                    Ensino Fundamental Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Médio Incompleto" v-model="candidato.escolaridade.nivel">
                                    Ensino Médio Incompleto
                                </label>
                            </div>

                            <div class="field is-horizontal">
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Médio Completo" v-model="candidato.escolaridade.nivel">
                                    Ensino Médio Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Superior Incompleto" v-model="candidato.escolaridade.nivel">
                                    Ensino Superior Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" value="Ensino Superior Completo" v-model="candidato.escolaridade.nivel">
                                    Ensino Superior Completo
                                </label>
                            </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label for="" class="label">Nº do registro no conselho de classe</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input type="number" class="input" id="registroEnsino" v-model="candidato.escolaridade.registro">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">É pessoa com deficiência?</label>
                    </div>
                    <div class="field-body">

                        <div class="control">
                            <label class="radio">
                                <input type="radio" class="input" id="pcd" name="pcd" @click="setPcd('true')">
                                Sim
                            </label>
                            <label class="radio">
                                <input type="radio" class="input" id="pcd" name="pcd" @click="setPcd('false')" checked>
                                Não
                            </label>
                        </div>

                        <div class="field is-horizontal" v-if="candidato.pcd.isPcd">
                            <div class="field-label is-normal">
                                <label class="label">Qual?</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input type="text" class="input" id="tipoPcd" v-model="candidato.pcd.deficiencia">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="field is-horizontal" v-if="candidato.pcd.isPcd">
                    <div class="field-label is-normal">
                        <label class="label">Nível ou grau da deficiência?</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-expanded">
                            <p class="control">
                                <input type="text" id="nivelPcd" class="input" v-model="candidato.pcd.nivel">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">CID</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="cid" v-model="candidato.pcd.cid">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="button is-primary" :disabled="disabled" @click="submit">Enviar</button>
                <label class="label" v-if="disabled"> Selecione uma vaga no quadro abaixo antes de enviar.</label>
                <div class="box has-background-danger" v-if="erro">
                    <label class="label" style="color: white" >Erro no preenchimento: {{ aviso }}</label>
                </div>

                <div class="section has-text-centered">
                    <h1 class="title">Quadro de Vagas</h1>
                    <hr>    
                    <tableVagas :formulario='true' @isChecked="disabled = false; candidatura.vaga = $event"/>
                </div>

            </form>       
        </div>
    </div>
</template>

<script>
import TableVagas from '@/components/table.vue'
const fb = require('../firebaseConfig.js')

export default {
    name: "TrabalheConosco",
    data() {
        return {
            disabled: true,
            aviso: '',
            erro: false,
            candidato: {
                nome: '',
                nomePai: '',
                nomeMae: '',
                dataNasc: {
                    dia: '',
                    mes: '',
                    ano: ''
                },
                idade: '',
                cpf: '',
                rg: {
                    registro: '',
                    dataEmissao: {
                        dia: '',
                        mes: '',
                        ano: ''
                    },
                    orgaoEmissor: ''
                },
                tituloEleitor: {
                    numero: '',
                    dataEmissao: {
                        dia: '',
                        mes: '',
                        ano: ''
                    },
                    zona: '',
                    sessao: ''
                },
                cns: '',
                endereco: {
                    rua: '',
                    numero: '',
                    bairro: '',
                    cidade: ''
                },
                contato: {
                    email: '',
                    telefone1: '',
                    telefone2: ''
                },
                escolaridade: {
                    nivel: '',
                    registro: ''
                },
                pcd: {
                    isPcd: false,
                    deficiencia: '',
                    nivel: '',
                    cid: ''
                }
            },
            candidatura: {
                edital: "001/2019",
                candidato: '',
                vaga: ''
            }
        }
    },
    watch: {
        "candidato.dataNasc": {
            deep: true,
            handler() {
                if(!this.candidato.dataNasc.dia || !this.candidato.dataNasc.mes || !this.candidato.dataNasc.ano) {
                    return
                }

                this.candidato.idade = this.calcIdade(this.candidato.dataNasc)
            }
        }

    },
    methods: {
        setPcd(v) {
            if(v == "true") {
                this.candidato.pcd.isPcd = true
            } else {
                this.candidato.pcd.isPcd = false
            }
        },
        async submit() {
            if(this.validateForm() == false) {
                return
            }

            await fb.candidatosCollection.add(this.candidato).then((docRef) => {
                // eslint-disable-next-line
                console.log("Cadastrado com id: ", docRef.id)
                this.candidatura.candidato = docRef.id
            }).catch((error) => {
                // eslint-disable-next-line
                console.error("Erro: ", error)
            })

            fb.editaisCollection.add(this.candidatura).then(function(docRef){
                // eslint-disable-next-line
                console.log("Edital cadastrado", docRef.id)
            }).catch(function(error){
                // eslint-disable-next-line
                console.error("Erro: ", error)
            })

            this.$router.push({ name: "cadastrado"})
        },
        validateForm() {
            let c = this.candidato
            if ( this.isEmpty(c.nome, "Nome Completo") == false) { return false }
            if ( this.isEmpty(c.nomePai, "Nome do Pai") == false) { return false }
            if ( this.isEmpty(c.nomeMae, "Nome da Mãe") == false) { return false }
            if ( 
                this.isEmpty(c.dataNasc.dia, "Dia de Nascimento") == false 
                || this.isEmpty(c.dataNasc.mes, "Mes de Nascimento") == false 
                || this.isEmpty(c.dataNasc.ano, "Ano de Nascimento") == false
            ) { 
                return false 
            } else { 
                this.formatDate(c.dataNasc) 
            }
            if ( this.isEmpty(c.cpf, "CPF") == false ) { return false }
            if ( this.isEmpty(c.rg.registro, "RG") == false ) { return false }
            if ( 
                this.isEmpty(c.rg.dataEmissao.dia, "Data de Emissão do RG") == false
                || this.isEmpty(c.rg.dataEmissao.mes, "Data de Emissão do RG") == false
                || this.isEmpty(c.rg.dataEmissao.ano, "Data de Emissão do RG") == false
            ) { 
                return false 
            } else {
                this.formatDate(c.rg.dataEmissao)
            }
            if ( this.isEmpty(c.rg.orgaoEmissor, "Órgão Emissor do RG") == false ) { return false }
            if ( this.isEmpty(c.tituloEleitor.numero,"Título Eleitor") == false ) { return false }
            if ( this.isEmpty(c.tituloEleitor.dataEmissao.dia,"Data de Emissão do Título de Eleitor") == false
                || this.isEmpty(c.tituloEleitor.dataEmissao.mes,"Data de Emissão do Título de Eleitor") == false
                || this.isEmpty(c.tituloEleitor.dataEmissao.ano,"Data de Emissão do Título de Eleitor") == false 
            ) { 
                return false 
            } else {
                this.formatDate(c.tituloEleitor.dataEmissao)
            }
            if ( this.isEmpty(c.tituloEleitor.zona,"Zona do Título de Eleitor") == false ) { return false }
            if ( this.isEmpty(c.tituloEleitor.sessao,"Sessão do Título de Eleitor") == false ) { return false }
            if ( this.isEmpty(c.cns,"CNS") == false ) { return false }
            if ( this.isEmpty(c.endereco.rua,"Rua") == false ) { return false }
            if ( this.isEmpty(c.endereco.numero,"Número do Endereço") == false ) { return false }
            if ( this.isEmpty(c.endereco.bairro,"Bairro") == false ) { return false }
            if ( this.isEmpty(c.endereco.cidade,"Cidade") == false ) { return false }
            if ( this.isEmpty(c.contato.email,"Email") == false ) { return false }
            if ( this.isEmpty(c.contato.telefone1,"Telefone Celular") == false ) { return false }
            if ( this.isEmpty(c.escolaridade.nivel,"Escolaridade") == false ) { return false }
            
            //if ( this.isEmpty(,"") == false ) { return false }
        },
        isEmpty(field, alias) {
            if(!field) {
                this.erro = true
                this.aviso = "Campo '" + alias + "' vazio."
                return false
            }
        },
        formatDate(data) {
            this.candidato.dataNasc = data.dia + "/" + data.mes + "/" + data.ano
        },
        calcIdade(dataNasc) {
            let d = new Date
            let ano_atual = d.getFullYear()
            let mes_atual = d.getMonth() + 1
            let dia_atual = d.getDate()

            let idade = ano_atual - dataNasc.ano

            if( mes_atual < dataNasc.mes || mes_atual == dataNasc.mes && dia_atual < dataNasc.dia) {
                idade--
            }

            return idade < 0 ? 0 : idade

        },
    },
    components: {
        'tableVagas': TableVagas
    }
}
</script>

<style lang="scss" scoped>
.greeting {
    margin-bottom: 2rem;
}
.checkbox {
    margin: 1rem;
}
.box {
    margin: 0 auto;
    margin-top: 1rem;
    max-width: fit-content;
}
</style>