import Vue from 'vue'
import axios from 'axios'

import 'bootstrap'

import router from './router'
import store from './store'
import App from './components/app.vue'


new Vue({
    el: '#app',
    router,
    store,
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
