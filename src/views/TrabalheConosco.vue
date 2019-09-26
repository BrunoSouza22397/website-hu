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
                                <input class="input" type="text" id="name" />
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
                                <input class="input" type="text" id="nomePai" />
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
                                <input class="input" type="text" id="nomeMae" />
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
                                <input class="input" min="1" max="31" type="number" id="diaNasc" />
                            </p>
                            <p class="control">
                                <input type="number" min="01" max="12" class="input" id="mesNasc" />
                            </p>
                            <p class="control">
                                <input type="number" min="1939" max="2001" class="input" id="anoNasc" />
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Idade</label>
                            </div>
                            <p class="control">
                                <input type="number" min="18" max="80" class="input" id="idade" />
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">CPF</label>
                            </div>
                            <p class="control">
                                <input type="text" class="input" id="cpf">
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
                                <input type="text" class="input" id="rg">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Data de Emissão</label>
                            </div>
                            <div class="field is-horizontal">
                                <p class="control">
                                    <input class="input" min="1" max="31" type="number" id="diaEmissao" />
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissao" />
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissao" />
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Órgão Emissor/UF</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <input type="text" maxlength="2" id="rgUf" class="input">
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
                                <input type="text" class="input" id="tituloEleitor">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Data Emissão</label>
                            </div>
                            <div class="field-body">
                                <p class="control">
                                    <input class="input" min="1" max="31" type="number" id="diaEmissaoTituloEleitor" />
                                </p>
                                <p class="control">
                                    <input type="number" min="01" max="12" class="input" id="mesEmissaoTituloEleitor" />
                                </p>
                                <p class="control">
                                    <input type="number" min="1939" max="2001" class="input" id="anoEmissaoTituloEleitor" />
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Zona</label>
                            </div>
                            <div class="field-body">
                                <p class="control is-expanded">
                                    <input type="text" class="input" id="zonaTituloEleitor">
                                </p>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Sessão</label>
                            </div>
                            <div class="field-body">
                                <p class="control is-expanded">
                                    <input type="text" class="input" id="sessaoTituloEleitor">
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
                                <input type="text" class="input" id="numCns">
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
                                <input type="text" id="ruaEndereco" class="input">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Nº</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input type="number" id="numEndereco" class="input">
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
                                <input type="text" class="input" id="bairroEndereco">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="" class="label">Cidade</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="cidadeEndereco">
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
                                <input type="email" class="input" id="email">
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
                                <input type="text" class="input" id="telefone">
                            </p>
                        </div>

                        <div class="field is-horizontal">
                            
                            <div class="field-label is-normal">
                                <label for="" class="label">Outros</label>
                            </div>

                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="outroTelefone">
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
                                    <input type="radio" id="escolaridade" name="escolaridade">
                                    Ensino Fundamental Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade">
                                    Ensino Fundamental Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade">
                                    Ensino Médio Incompleto
                                </label>
                            </div>

                            <div class="field is-horizontal">
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade">
                                    Ensino Médio Completo
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade">
                                    Ensino Superior Incompleto
                                </label>
                                <label class="radio">
                                    <input type="radio" id="escolaridade" name="escolaridade">
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
                                <input type="number" class="input" id="registroEnsino">
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
                                <input type="radio" class="input" id="pcd" name="pcd">
                                Sim
                            </label>
                            <label class="radio">
                                <input type="radio" class="input" id="pcd" name="pcd">
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
                                        <input type="text" class="input" id="tipoPcd">
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
                                <input type="text" id="nivelPcd" class="input">
                            </p>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">CID</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <p class="control">
                                        <input type="text" class="input" id="cid">
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
                    <tableVagas :formulario='true'/>
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
            disabled: true
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