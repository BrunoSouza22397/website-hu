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
                                <input class="input" min="1" max="31" type="number" id="diaNasc" v-model="dataNasc.dia" placeholder="dia"/>
                            </p>
                            <p class="control">
                                <input type="number" min="01" max="12" class="input" id="mesNasc" v-model="dataNasc.mes" placeholder="mes"/>
                            </p>
                            <p class="control">
                                <input type="number" min="1939" max="2001" class="input" id="anoNasc" v-model="dataNasc.ano" placeholder="ano"/>
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
                                <input type="text" maxlength="14" class="input" id="cpf" v-model="candidato.cpf">
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
                                    <input class="input" min="1" max="31" type="number" id="diaEmissao" v-model="rg.dia" placeholder="dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissao" v-model="rg.mes" placeholder="mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2019" class="input" id="anoEmissao" v-model="rg.ano" placeholder="ano"/>
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Órgão Emissor/UF</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <input type="text" id="rgUf" class="input" v-model="candidato.rg.orgaoEmissor">
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
                                    <input class="input" min="1" max="31" type="number" id="diaEmissaoTituloEleitor" v-model="tituloEleitor.dia" placeholder="dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissaoTituloEleitor" v-model="tituloEleitor.mes" placeholder="mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2019" class="input" id="anoEmissaoTituloEleitor" v-model="tituloEleitor.ano" placeholder="ano"/>
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
                                <input type="text" id="ruaEndereco" class="input" v-model="candidato.endereco.rua" maxlength="100" placeholder="Máx. 100 carácteres">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Nº</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input type="text" id="numEndereco" class="input" v-model="candidato.endereco.numero">
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
                                <input type="text" class="input" id="bairroEndereco" v-model="candidato.endereco.bairro" placeholder="Máx. 50 carácteres" maxlength="50">
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
                                <input type="text" class="input" id="telefone" v-model="candidato.contato.telefone1" placeholder="Ex.: 9 1234 5678">
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
                                <input type="number" class="input" id="registroEnsino" v-model="candidato.escolaridade.registro" maxlength="50">
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
                                        <input type="text" class="input" id="tipoPcd" v-model="candidato.pcd.deficiencia" maxlength="50">
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
                                <input type="text" id="nivelPcd" class="input" v-model="candidato.pcd.nivel" maxlength="15">
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
            dataNasc: {
                dia: '',
                mes: '',
                ano: ''
            },
            rg: {
                dia: '',
                mes: '',
                ano: ''
            },
            tituloEleitor: {
                dia: '',
                mes: '',
                ano: ''
            },
            candidato: {
                nome: '',
                nomePai: '',
                nomeMae: '',
                dataNasc: '',
                idade: '',
                cpf: '',
                rg: {
                    registro: '',
                    dataEmissao: '',
                    orgaoEmissor: ''
                },
                tituloEleitor: {
                    numero: '',
                    dataEmissao: '',
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
        "dataNasc": {
            deep: true,
            handler() {
                if(!this.dataNasc.dia || !this.dataNasc.mes || !this.dataNasc.ano) {
                    return
                }

                this.candidato.idade = this.calcIdade(this.dataNasc)
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
            //eslint-disable-next-line
            let emailExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            //eslint-disable-next-line
            let nomeExp = /^[*+.\\\/#$%!?\)\(\[\]\{\}]+$/
            //eslint-disable-next-line
            let diaExp = /^([0-3][0-9])|([1-9])$/
            //eslint-disable-next-line
            let mesExp = /^([0][1-9])|([1][0-2])|[1-9]$/
            //eslint-disable-next-line
            let anoExp = /^(19|20)[0-9]{2}$/
            //eslint-disable-next-line
            let cpfExp = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/
            //eslint-disable-next-line
            let rgExp = /^([0-9]{9})|([0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9])$/
            //eslint-disable-next-line
            let emissorRgExp = /^[A-z]+([/]?[A-z]+)?$/
            //eslint-disable-next-line
            let tituloEleitorExp = /^([0-9]{12})|([0-9]{10}\/[0-9]2)$/
            //eslint-disable-next-line
            let tituloZonaExp = /^[0-9]{3}$/
            //eslint-disable-next-line
            let tituloSecaoExp = /^[0-9]{4}$/
            //eslint-disable-next-line
            let cnsExp = /^[0-9]{16}$/
            //eslint-disable-next-line
            let ruaExp = /^.{1,100}$/
            //eslint-disable-next-line
            let numExp = /^.{1,50}$/
            //eslint-disable-next-line
            let bairroExp = /^.{2,50}$/
            //eslint-disable-next-line
            let telExp = /^([0-9]{9}|[0-9]{4,5}(-|\.| )[0-9]{4}|[0-9]{8}|[0-9]{4}(-|\.| )(0-9){4}){1}$/
            //eslint-disable-next-line
            let escolaExp = /^(Ensino )(Fundamental |Médio |Superior )(Completo|Incompleto)$/
            //eslint-disable-next-line
            let registroExp = /^.{1,50}$/
            //eslint-disable-next-line
            let nvlPcdExp = /^.{1,15}$/

            let cidExp = /^[A-z]+[0-9]+$/
            
            //nomes
            if ( nomeExp.test(c.nome) || c.nome.length < 2 || c.nome.length > 255 ) { 
                this.erro = true
                this.aviso = "Nome Completo inválido"
                return false 
            }
            if ( nomeExp.test(c.nomePai) || c.nomePai.length < 2 || c.nomePai.length > 255 ) { 
                this.erro = true
                this.aviso = "Nome do pai inválido"
                return false 
            }
            if ( nomeExp.test(c.nomeMae) || c.nomeMae.length < 2 || c.nomeMae.length > 255 ) { 
                this.erro = true
                this.aviso = "Nome da mãe inválido"    
                return false 
            }

            //nascimento
            if ( 
                !diaExp.test(this.dataNasc.dia) 
                || !mesExp.test(this.dataNasc.mes) 
                || !anoExp.test(this.dataNasc.ano)
            ) { 
                this.erro = true
                this.aviso = "Data de nascimento inválida"
                return false
            } else { 
                this.candidato.dataNasc = this.dataNasc.dia + "/" + this.dataNasc.mes + "/" + this.dataNasc.ano 
            }
            
            //cpf
            if ( !cpfExp.test(c.cpf) ) {
                this.erro = true
                this.aviso = "CPF inválido"
                return false
            }
            
            //rg
            if( !rgExp.test(c.rg.registro) ) {
                this.erro = true
                this.aviso = "RG inválido"
                return false
            }
            if ( 
                !diaExp.test(this.rg.dia)
                || !mesExp.test(this.rg.mes)
                || !anoExp.test(this.rg.ano)
            ) { 
                this.erro = true
                this.aviso = "Data de expedição do RG inválida"
                return false 
            } else {
                this.candidato.rg.dataEmissao = this.rg.dia + "/" + this.rg.mes + "/" + this.rg.ano
            }
            if ( !emissorRgExp.test(c.rg.orgaoEmissor) ) { 
                this.erro = true
                this.aviso = "Órgão Emissor do RG inválido"
                return false 
            }
            
            //titulo de eleitor
            if ( !tituloEleitorExp.test(c.tituloEleitor.numero) ) { 
                this.erro = true
                this.aviso = "Titulo de eleitor inválido"
                return false 
            }
            if ( !diaExp.test(this.tituloEleitor.dia)
                || !mesExp.test(this.tituloEleitor.mes)
                || !anoExp.test(this.tituloEleitor.ano)
            ) {
                this.erro = true
                this.aviso = "Data de emissão do título eleitoral inválida"
                return false
            } else {
                this.candidato.tituloEleitor.dataEmissao = this.tituloEleitor.dia + "/" + this.tituloEleitor.mes + "/" + this.tituloEleitor.ano
            }
            if ( !tituloZonaExp.test(c.tituloEleitor.zona) ) { 
                this.erro = true
                this.aviso = "Zona do título eleitoral inválida."
                return false
            }
            if ( !tituloSecaoExp.test(c.tituloEleitor.sessao) ) { 
                this.erro = true
                this.aviso = "Sessão do título eleitoral inválida"
                return false 
            }

            //cns
            if ( !cnsExp.test(c.cns) ) { 
                this.erro = true
                this.aviso = "CNS inválido"                
                return false 
            }

            //endereço
            if ( !ruaExp.test(c.endereco.rua) ) { 
                this.erro = true
                this.aviso = "Rua inválida"
                return false
            }
            if ( !numExp.test(c.endereco.numero) ) { 
                this.erro = true
                this.aviso = "Número do endereço inválido"
                return false 
            }
            if ( nomeExp.test(c.endereco.bairro) || c.endereco.bairro.length > 50 || c.endereco.bairro.length < 1 ) { 
                this.erro = true
                this.aviso = "Bairro inválido"
                return false
            }
            if ( nomeExp.test(c.endereco.cidade) || c.endereco.cidade.length > 50 || c.endereco.cidade.length < 1 ) { 
                this.erro = true
                this.aviso = "Cidade inválida"
                return false 
            }

            //contato
            if ( !emailExp.test(c.contato.email) ) { 
                this.erro = true
                this.aviso = "Campo E-Mail inválido."
                return false 
            }
            if ( !telExp.test(c.contato.telefone1) ) { 
                this.erro = true
                this.aviso = "Telefone principal inválido"
                return false 
            }
            if ( !telExp.test(c.contato.telefone2) && c.contato.telefone2 ) {
                this.erro = true
                this.aviso = "Telefone secundário inválido"
                return false
            }

            //escolaridade
            if ( !escolaExp.test(c.escolaridade.nivel) ) { 
                this.erro = true
                this.aviso = "Escolaridade inválida"
                return false 
            }
            if ( !registroExp.test(c.escolaridade.registro) && c.escolaridade.registro ) {
                this.erro = true
                this.aviso = "Registro escolar inválido"
            }

            //PCD
            if ( c.pcd.isPcd == null ) {
                this.erro = true
                this.aviso = "Opção PCD inválida"
                return false
            }
            if ( !registroExp.test(c.pcd.deficiencia) && c.pcd.isPcd == true) {
                this.erro = true
                this.aviso = "Campo deficiência inválido"
                return false
            }
            if ( !nvlPcdExp.test(c.pcd.nivel) && c.pcd.isPcd == true) {
                this.erro = true
                this.aviso = "Nível de deficiência inválido"
                return false
            }
            if ( !cidExp.test(c.pcd.cid) && c.pcd.isPcd == true) {
                this.erro = true
                this.aviso = "CID inválido"
                return false
            }
            
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