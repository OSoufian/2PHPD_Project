/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
import Vue from 'vue'

import vuetify from './plugins/vuetify'

import Home from './components/HelloWorld'

import navbar from './components/NavBar'

// const routes = [
//     { path: '/', component: Home, name: 'home' }
// ]

new Vue({
    vuetify,
    components: {
        Home,
        
    },

}).$mount('#app')

new Vue({vuetify,
    components: {
    navbar
    }
}).$mount('#navItem')