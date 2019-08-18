

require('./bootstrap');
window.Vue = require('vue');
import Vuex from 'vuex'
import storeVuex from './store/index'
Vue.use(Vuex)

const store = new Vuex.Store(storeVuex)


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-app', require('./components/MainApp.vue').default);
Vue.component('chat-app', require('./components/ChatApp.vue').default);

const app = new Vue({
    el: '#app',
    store
});
