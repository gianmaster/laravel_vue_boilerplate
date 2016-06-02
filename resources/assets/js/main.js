import Vue from 'Vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);

import PrepareVue from './config_vue';

import Alert from './components/Alert.vue';
import Modal from './components/Modal.vue';
import MenuCrear from './app/MenuCrear.vue';
import MenuListar from './app/MenuListar.vue';

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
        listarmenu: MenuListar
    }
});
