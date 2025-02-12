<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Patent | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const business = ref([
  {
    name: '软件代工',
    description: '编号：XPO25011 | 任何平台，任何软件，任意规模。',
    status: '可代工'
  },
  {
    name: '网页代工（建站）',
    description: '编号：XPO25011 | 贺卡/邀请函/商业/个人 任意用途，任意规模。可建站代理一条龙服务。',
    status: '可代工'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">XINGJI商务平台-项目代工</h1>

      <div class="grid grid-cols-1 gap-8">
        <div v-for="busines in business" 
          :key="busines.name"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <div class="flex items-center justify-between">
              <h2 class="text-2xl font-bold text-white">{{ busines.name }}</h2>
              <span class="px-4 py-1 bg-blue-500/20 text-blue-400 rounded-full">{{ busines.status }}</span>
            </div>
            <p class="text-gray-400 mt-4">{{ busines.description }}</p>
          </div>
        </div>
      </div>

      <div class="py-8 relative flex gap-4">
        <a href="https://qm.qq.com/q/7MqXsT9REA"
          class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200s">
            立即合作（QQ）
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
        <a href="#"
          class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200">
            微信搞不了链接...QwQ
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
              
        <div class="text-gray-400 space-y-2">
          <p>QQ：1559689519</p>
          <p>微信：xingji_software</p>
        </div>
      </div>
    </div>
  </div>
</template> 