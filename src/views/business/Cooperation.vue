<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Cooperation | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const cooperationTypes = ref([
  {
    title: '技术合作',
    link: '/business/cooperation/tech',
    description: '寻求技术合作伙伴'
  },
  {
    title: '成为授权经销商',
    link: '/business/cooperation/reseller',
    description: '加入我们的销售网络'
  },
  {
    title: '批量购买产品',
    link: '/business/cooperation/bulk',
    description: '批量采购优惠'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">业务合作</h1>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <router-link v-for="type in cooperationTypes"
          :key="type.title"
          :to="type.link"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8 hover:transform hover:scale-[1.02] transition-all duration-300">
            <h2 class="text-2xl font-bold text-white mb-4">{{ type.title }}</h2>
            <p class="text-gray-400">{{ type.description }}</p>
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template> 