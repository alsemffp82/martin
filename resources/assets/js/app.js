
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./parsley');
require('./main');
var $ = require('jquery');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('first-work', require('./components/FirstWork.vue'));

import Lottie from './components/lottie.vue';
import * as animationData from '../bms-rocket.json';

new Vue({
    el: '#app',
    data: {
        workView: true,
        work: 0,
        defaultOptions: {animationData: animationData},
    },
    components:{
        'lottie':Lottie,
    },
    methods: {
        goPage: function(num) {
            var nav = num + 1;
            $('.onepage-pagination li:nth-child('+ nav +')').children().trigger("click");
        },
        eachWork: function(num) {
            this.work = num
            !this.workView
        }
    } 
});

$(function(){
    
    $('.main').onepage_scroll();
    // var sectionIndex = $('section.active').data('index');
    // console.log(sectionIndex);
    // if( sectionIndex == 2) {
    //     setTimeout(() => {
    //         $('.section-right').addClass('animated fadeIn')$('.section-right').addClass('animated fadeIn')       
    //     }, 1000);
    // }
});


