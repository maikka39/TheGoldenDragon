import Vue from 'vue'
import VueRouter from "vue-router"
import Home from "./components/home/home"
import HomeContact from "./components/home/pages/contact/contact"
import HomeDefault from "./components/home/pages/default/default"
import HomeDiscounts from "./components/home/pages/discounts/discounts"
import HomeMenu from "./components/home/pages/menu/menu"
import HomeNews from "./components/home/pages/news/news"
import Login from "./components/login"
import CashRegister from "./components/cash_register/cash_register"
import CashRegisterDefault from "./components/cash_register/pages/default/default"
import CashRegisterMenu from "./components/cash_register/pages/menu/menu"
import CashRegisterOrders from "./components/cash_register/pages/orders/orders"
import CashRegisterDiscounts from "./components/cash_register/pages/discounts/discounts"
import Admin from "./components/admin/admin"
import AdminDefault from "./components/admin/pages/default/default"
import AdminMenu from "./components/admin/pages/menu/menu"
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
        {
          path: 'discounts',
          component: HomeDiscounts,
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
        {
          path: 'orders',
          component: CashRegisterOrders,
        },
        {
          path: 'discounts',
          component: CashRegisterDiscounts,
        },
      ]
    },
    {
      path: '/admin',
      meta: {
        auth: true,
      },
      component: Admin,
      children: [
        {
          path: '',
          component: AdminDefault,
        },
        {
          path: 'menu',
          component: AdminMenu,
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