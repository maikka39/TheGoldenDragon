import Vue from 'vue'
import VueRouter from "vue-router"
import Home from "./components/home/home"
import HomeContact from "./components/home/pages/contact/contact"
import HomeDefault from "./components/home/pages/default/default"
import HomeMenu from "./components/home/pages/menu/menu"
import HomeNews from "./components/home/pages/news/news"
import Login from "./components/login"
import CashRegister from "./components/cash_register/cash_register"
import CashRegisterDefault from "./components/cash_register/pages/default/default"
import CashRegisterMenu from "./components/cash_register/pages/menu/menu"
import NotFound from "./components/not_found"

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    {
      path: '/',
      component: Home,
      children: [
        {
          path: '',
          component: HomeDefault,
        },
        {
          path: 'menu',
          component: HomeMenu,
        },
        {
          path: 'news',
          component: HomeNews,
        },
        {
          path: 'contact',
          component: HomeContact,
        },
      ]
    },
    {
      path: '/cashregister',
      meta: {
        auth: true,
      },
      component: CashRegister,
      children: [
        {
          path: '',
          component: CashRegisterDefault,
        },
        {
          path: 'menu',
          component: CashRegisterMenu,
        },
      ]
    },
    { path: '/login', beforeEnter (to, from, next) {
        const loggedIn = localStorage.getItem('user')

      if (loggedIn)
        next('/cashregister')

      next()
      }, component: Login },
    { path: '/logout',
      beforeEnter (to, from, next) {
        localStorage.removeItem('user')
        next('/')
      }
    },
    { path: '*', component: NotFound }
  ]
})

router.beforeEach((to, from, next) => {
  const loggedIn = localStorage.getItem('user')

  if (to.matched.some(record => record.meta.auth) && !loggedIn) {
    next('/login')
    return
  }
  next()
})

export default router;