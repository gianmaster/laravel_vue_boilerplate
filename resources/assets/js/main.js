import Vue from 'Vue';
import VueResource from 'vue-resource';
import VueValidator from 'vue-validator'

Vue.use(VueResource);
Vue.use(VueValidator);

Vue.config.devtools = true;

import PrepareVue from './config_vue';

import Alert from './components/Alert.vue';
import Modal from './components/Modal.vue';
import MenuCrear from './app/MenuCrear.vue';
import MenuListar from './app/MenuListar.vue';

import CMenu from './app/ContainerMenu.vue';
import Tester from './app/Tester.vue';

import listaIconos from './app/listaIconos.vue';

PrepareVue(Vue);

new Vue({
    el: '#app',
    data: {
        showModal: false
    },
    components: {
        alert: Alert,
        modal: Modal,
        crearmenu: MenuCrear,
        listarmenu: MenuListar,
        iconlist: listaIconos,
        containerMenu: Tester
    }
});

