<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Business | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const businessLinks = ref([
  {
    title: '专利转让',
    link: '/business/patent',
    icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
  },
  {
    title: '广告插入',
    link: '/business/ads',
    icon: 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z'
  },
  {
    title: '业务合作',
    link: '/business/cooperation',
    icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
  },
  {
    title: '批量采购',
    link: '/business/cooperation/bulk',
    icon: 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <!-- Hero Section -->
    <section class="relative py-20">
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-[url('/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 via-purple-500/30 to-pink-500/30 backdrop-blur-3xl"></div>
      </div>
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
          XINGJI商务平台
        </h1>
      </div>
    </section>

    <!-- Links Section -->
    <section class="py-20 px-4 relative">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <router-link v-for="item in businessLinks" 
            :key="item.title"
            :to="item.link"
            class="group relative">
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
            <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8 hover:transform hover:scale-[1.02] transition-all duration-300">
              <div class="flex items-center space-x-4">
                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="item.icon" />
                </svg>
                <h2 class="text-2xl font-bold text-white">{{ item.title }}</h2>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template> 