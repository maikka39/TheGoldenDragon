import Vue from 'vue'
import VueRouter from "vue-router"
import Home from "./components/home/home"
import HomeContact from "./components/home/pages/contact/contact"
import HomeDefault from "./components/home/pages/default/default"
import HomeMenu from "./components/home/pages/menu/menu"
import HomeNews from "./components/home/pages/news/news"
import CashRegister from "./components/cash_register"
import Login from "./components/login"

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
    { path: '/cash', component: CashRegister, meta: {auth: true} },
    { path: '/login', component: Login },
    { path: '/logout',
      beforeEnter (to, from, next) {
        auth.logout()
        next('/')
      }
    }
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