<template>
    <transition name="modal" id="modal-template">
        <div class="modal-mask" aria-hidden="true">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-header is-size-4">
                        <span id="close-button" @click="$emit('close')">&times;</span>
                        <h3 class="modal-title is-size-3" v-html="title"></h3>
                    </div>
                    <div class="modal-body">
                        <slot>
                            
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>

export default {
    name: "Modal",
    props: {
        title: String
    }
}
</script>

<style lang="scss">
.modal-mask {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .5);
    display: table;
    transition: opacity .3s ease;
}
.modal-wrapper {
    display: table-cell;
    vertical-align: middle;
}
.modal-container {
    width: fit-content;
    margin: 0px auto;
    padding: 20px 30px;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
    transition: all .3s ease;
}
.modal-body {
    margin: 20px 0;
}
.modal-default-button {
    float: right;
}
.modal-enter {
    opacity: 0;
}
.modal-leave-active {
    opacity: 0;
}
.modal-enter .modal-container, .modal-leave-active .modal-container {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
#close-button {
    float: right;
}
#close-button:hover, #close-button:focus {
    cursor:pointer;
}
</style>