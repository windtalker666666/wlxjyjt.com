import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/news',
      name: 'news',
      component: () => import(/* webpackChunkName: "about" */ './views/News/list.vue')
    },
    {
      path: '/news/detail/:aid',
      name: 'detail',
      component: () => import(/* webpackChunkName: "about" */ './views/News/detail.vue')
    },
    {
      path: '/course',
      name: 'course',
      component: () => import(/* webpackChunkName: "about" */ './views/Course/detail.vue')
    },
    {
      path: '/project',
      name: 'project',
      component: () => import(/* webpackChunkName: "about" */ './views/Project/detail.vue')
    },
    {
      path: '/team',
      name: 'team',
      component: () => import(/* webpackChunkName: "about" */ './views/Team/detail.vue')
    }
  ]
})
