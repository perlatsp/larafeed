/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//components
import Post from "./components/Post.vue"
import Dashboard from "./components/admin/dashboard.vue"
import Posts from "./components/admin/posts/posts.vue"
import EditPost from "./components/admin/posts/edit-post.vue"
import NewPost from "./components/admin/posts/new-post.vue"
import Login from "./components/login"
import LatestPosts from "./components/latest-posts"
//plugins
import Vuetify from "vuetify"
import Toastr from "vue-toastr"
import {VueEditor} from 'vue2-editor'

require('vue-toastr/src/vue-toastr.scss');

Vue.use(Vuetify);
Vue.use(Toastr, {
    defaultProgressBar: false
});
Vue.component('post', Post);
Vue.component('posts', Posts);
Vue.component('edit-post', EditPost);
Vue.component('new-post', NewPost);
Vue.component('dashboard', Dashboard);
Vue.component('login', Login);
Vue.component('latest-posts', LatestPosts);

Vue.component('vue-editor', VueEditor);
const app = new Vue({
    el: '#app'
});
