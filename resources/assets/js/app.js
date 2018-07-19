require ("./bootstrap")

import Vue from 'vue';

import vSelect from 'vue-select';
Vue.component('v-select', vSelect);

Vue.component('projects', require('./components/Project.vue'));

import domform from './components/domform.vue';


import domupdate from './components/domupdate.vue';

import pagecreate from './components/pagecreate.vue';

import timeme from './components/timeme.vue';

Vue.use(require('vue-moment'));


new Vue({
	

el:'#app',

	

components:{

	domform,		
	domupdate,
	pagecreate,
	timeme,

	},




})

