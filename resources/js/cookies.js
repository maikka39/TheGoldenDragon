import Vue from "vue"
import VueCookies from "vue-cookies"


Vue.use(VueCookies)

Vue.$cookies.config(60 * 60 * 24 * 365)