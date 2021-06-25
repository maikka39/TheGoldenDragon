import Vue from 'vue'
import App from './components/app.vue'
import router from './router'
import store from './store'
import axios from 'axios'
import i18n from "./i18n";
import "./filters";

import 'bootstrap'

new Vue({
    el: '#app',
    router,
    store,
    i18n,
    render: h => h(App),
    created () {
        const userInfo = localStorage.getItem('user')

        if (userInfo) {
            const userData = JSON.parse(userInfo)
            this.$store.commit('setUserData', userData)
        }

        axios.interceptors.response.use(
            response => response,
            error => {
                if (error.response.status === 401) {
                    this.$store.dispatch('logout')
                }

                return Promise.reject(error)
            }
        )
  },
})
