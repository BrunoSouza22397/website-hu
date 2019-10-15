<template>
    <div class="section">
        <div class="columns">
            <div class="column is-one-third">
                <div class="contato-info">
                    <p class="title is-size-6 is-marginless has-text-white-ter">Reclamações, Sugestões e Elogios</p>
                    <p class="title is-size-6 is-marginless has-text-white-ter">preencha o formulário ao lado:</p>
                    <br>
                    <p class="title is-size-6 is-marginless has-text-white-ter">Central de Atendimento HU:</p>
                    <p class="is-size-6">(51)3476-8100</p>
                    <br>
                    <p class="title is-size-6 is-marginless has-text-white-ter">Central de Atendimento HPSC:</p>
                    <p class="is-size-6">(51)3476-4507</p>
                </div>
            </div>
            <div class="column is-two-thirds">
                <div class="form-background">
                    <form @submit.prevent="submit">
                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Seu nome..." v-model="mensagem.nome"/>
                            </div>
                            <div v-if="errors && errors.name" class="has-text-danger">{{ errors.name[0] }}</div>
                        </div>
                            
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Seu email" v-model="mensagem.email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right has-text-danger" v-if="errors && errors.email">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <div class="has-text-danger" v-if="errors && errors.email">{{ errors.email[0] }}</div>
                        </div>
                            
                        <div class="field">
                            <label class="label">Assunto</label>
                            <div class="control">
                                <div class="select">
                                    <select v-model="mensagem.assunto">
                                        <option value="" disabled selected>Escolha um assunto</option>
                                        <option>Reclamação</option>
                                        <option>Sugestão</option>
                                        <option>Elogio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="has-text-danger" v-if="errors && errors.topic">{{ errors.topic[0] }}</div>
                        </div>
                            
                        <div class="field">
                            <label class="label">Mensagem</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Digite sua mensagem..." v-model="mensagem.conteudo"></textarea>
                            </div>
                            <div class="has-text-danger" v-if="errors && errors.message">{{ errors.message[0] }}</div>
                        </div>
                            
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">Enviar</button>
                            </div>
                            <div class="control">
                                <button class="button is-text" type="reset" @click="limpar">Limpar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import service from '@/services/mail.js'

export default {
    name: "Contato",
    data() {
        return {
            mensagem: {
                nome: '',
                email: '',
                assunto: '',
                conteudo: ''
            },
            errors: {},
        }
    },
    methods: {
        submit() {
            this.errors = {}
            service.sendMessage(this.mensagem)
        },
        limpar() {
            this.mensagem.nome = ''
            this.mensagem.email = ''
            this.mensagem.assunto = ''
            this.mensagem.conteudo = ''
            this.errors = {}
        }
    }
}
</script>
