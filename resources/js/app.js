require('./bootstrap');

import Vue from 'vue';


Vue.component('vue', require('./components/app').default);


const app = new vue({
    el:'#app'
})