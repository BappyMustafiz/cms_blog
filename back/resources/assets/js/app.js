
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('slugWidget', require('./components/slugWidget.vue'));
Vue.component(Buefy.Checkbox.name, Buefy.Checkbox);
Vue.component(Buefy.Radio.name, Buefy.Radio);
// var app = new Vue({
//   el: '#app',
//   data: {
//   }
// });
// 
require ('./manage')
