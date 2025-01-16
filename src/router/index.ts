import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/os/xj380',
      name: 'xj380',
      component: () => import('../views/os/XJ380.vue')
    },
    {
      path: '/software',
      name: 'software',
      component: () => import('../views/software/Software.vue')
    },
    {
      path: '/software/games/bcms',
      name: 'bcms',
      component: () => import('../views/software/games/BCMS.vue')
    },
    {
      path: '/software/games/bcms-de',
      name: 'bcms-de',
      component: () => import('../views/software/games/BCMSDeluxe.vue')
    },
    {
      path: '/software/games/bcms2',
      name: 'bcms2',
      component: () => import('../views/software/games/BCMS2.vue')
    },
    {
      path: '/open-source',
      name: 'open-source',
      component: () => import('../views/OpenSource.vue')
    },
    {
      path: '/business',
      name: 'business',
      component: () => import('../views/business/Business.vue')
    },
    {
      path: '/business/patent',
      name: 'patent',
      component: () => import('../views/business/Patent.vue')
    },
    {
      path: '/business/ads',
      name: 'ads',
      component: () => import('../views/business/Ads.vue')
    },
    {
      path: '/business/cooperation',
      name: 'cooperation',
      component: () => import('../views/business/Cooperation.vue')
    },
    {
      path: '/business/cooperation/tech',
      name: 'tech-cooperation',
      component: () => import('../views/business/TechCooperation.vue')
    },
    {
      path: '/business/cooperation/reseller',
      name: 'reseller',
      component: () => import('../views/business/Reseller.vue')
    },
    {
      path: '/business/cooperation/bulk',
      name: 'bulk-purchase',
      component: () => import('../views/business/BulkPurchase.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/about/About.vue')
    },
    {
      path: '/join',
      name: 'join',
      component: () => import('../views/about/Join.vue')
    }
  ]
})

export default router 