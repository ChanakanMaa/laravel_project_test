import { create } from "lodash";
import { creatApp, createApp } from "vue";
import App from "../components/App.vue";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

createApp(App).mount("#vueapp");

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
});