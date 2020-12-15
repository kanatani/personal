/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('fadein-component', require('./components/FadeInComponent.vue').default);
Vue.component('image-component', require('./components/ImageComponent.vue').default);
Vue.component('humburger-component', require('./components/HumburgerComponent.vue').default);
Vue.component('menu-component', require('./components/HummenuComponent.vue').default);
Vue.component('community-component', require('./components/CommunityComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            isActive: false,
            Loginactive: true,
            isShow: false,
            name: '',
            email: '',
            message: '',
            messages: [],
            communiitydata: document.getElementById('communitydata').value,
        };
    },
    methods: {
        toggleButton() {
            this.isActive = !this.isActive;
        },
        opencommunity() {
            this.isShow = !this.isShow;
        },
        good: function() {
            this.Loginactive = !this.Loginactive;
        },
        tojiru: function() {
            this.isShow = false;
        },
        getMessages() {
            const chatroomid = document.getElementById('chatroom').value;
            axios({
                method: 'GET',
                url: '/person/chatroom/ajax/' + chatroomid,
                data: chatroomid,
                dataType: 'json',
            }).then((response) => {
               this.messages = response.data;
            })
            .catch(function(error) {
                console.log(error);
            });
        },
        send() {
            const chatroomid = document.getElementById('chatroom').value;
            const message = this.message;
            axios({
                method: 'POST',
                url: '/person/chatroom/' + chatroomid,
                data: { message, chatroomid },
                dataType: 'json',
            }).then(res => {
                this.message = '';
                console.log('received a message');
                console.log(res.status);
                this.messages = res.data;
            });  
        },
        // community() {
        //     const communitydata = document.getElementById('communitydata').value;
        //     axios({
        //         method: 'GET',
        //         url: '/person/chatroom/ajax/' + chatroomid,
        //         data: chatroomid,
        //         dataType: 'json',
        //     }).then((response) => {
        //        this.messages = response.data;
        //     })
        //     .catch(function(error) {
        //         console.log(error);
        //     });
        // },
    },
    mounted() {
        this.getMessages();
        Echo.channel('chat').listen('MessageCreated', (e) => {
            this.getMessages();
        });
    },
    computed: {
        isInValidName() {
            return this.name.length < 1;
        },
        isInValidEmail() {
            return this.email.length < 1;
        }
    }
});