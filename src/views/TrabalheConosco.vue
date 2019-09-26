<template>
    <div class="section">
        <div class="container has-text-centered">
            <p class="greeting">
            Ficamos felizes que você esteja interessado em trabalhar conosco! <br>
            Para participar do nosso processo seletivo preencha o formulário abaixo.<br>
            Entraremos em contato com você caso seja selecionado para alguma vaga.
            </p>

            <form @submit.prevent>
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
                                <input class="input" min="1" max="31" type="number" id="diaNasc" v-model="candidato.dataNasc.dia"/>
                            </p>
                            <p class="control">
                                <input type="number" min="01" max="12" class="input" id="mesNasc" v-model="candidato.dataNasc.mes"/>
                            </p>
                            <p class="control">
                                <input type="number" min="1939" max="2001" class="input" id="anoNasc" v-model="candidato.dataNasc.ano"/>
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Idade</label>
                            </div>
                            <p class="control">
                                <input type="number" min="18" max="80" class="input" id="idade" v-model="candidato.idade"/>
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
                                    <input class="input" min="1" max="31" type="number" id="diaEmissao" v-model="candidato.rg.dataEmissao.dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissao" v-model="candidato.rg.dataEmissao.mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissao" v-model="candidato.rg.dataEmissao.ano"/>
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
                                    <input class="input" min="1" max="31" type="number" id="diaEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.dia"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.mes"/>
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissaoTituloEleitor" v-model="candidato.tituloEleitor.dataEmissao.ano"/>
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Zona</label>
                            </div>
                            <div class="field-body">
                                <p class="control is-expanded">
                                    <input type="text" class="input" id="zonaTituloEleitor" v-model="candidato.tituloEleitor.zona">
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Sessão</label>
                            </div>
                            <div class="field-body">
                                <p class="control is-expanded">
                                    <input type="text" class="input" id="sessaoTituloEleitor" v-model="candidato.tituloEleitor.sessao">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

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
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Fundamental Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Fundamental Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Médio Incompleto
                                </label>
                            </div>

                            <div class="field is-horizontal">
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Médio Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Superior Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade" v-model="candidato.escolaridade.nivel">
                                    Ensino Superior Incompleto
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
                                <input type="radio" class="input" id="pcd" name="pcd" @click="setPcd('false')">
                                Não
                            </label>
                        </div>

                        <div class="field is-horizontal">
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
                
                <div class="field is-horizontal">
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

                <button class="button is-primary" :disabled="disabled">Enviar</button>
                <label class="label" v-if="disabled"> Selecione uma vaga no quadro abaixo antes de enviar.</label>

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

export default {
    name: "TrabalheConosco",
    data() {
        return {
            disabled: true,
            candidato: {
                cod: '',
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
                candidato: '',
                vaga: ''
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
        }
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
</style>