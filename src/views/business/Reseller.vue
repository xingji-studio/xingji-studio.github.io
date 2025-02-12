<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Reseller | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const contact = ref({
  qq: '1559689519',
  wechat: 'xingji_software'
})

const resellerTypes = ref([
  {
    name: 'XINGJI杂货铺',
    description: '由XINGJI工作室官方经营的店铺。'
  },
  {
    name: 'XINGJI合作杂货铺',
    description: '由XINGJI工作室官方授权的店铺。'
  },
  {
    name: 'XINGJI授权杂货铺',
    description: '从XINGJI工作室批量购买并销售的店铺。'
  },
  {
    name: 'XINGJI旗舰店',
    description: '这个是假的，大家不要信！',
    warning: true
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">成为授权经销商</h1>

      <!-- Contact Info -->
      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8 mb-12">
        <h2 class="text-2xl font-bold text-white mb-6">联系方式</h2>
        <div class="text-gray-400 space-y-2">
          <p>QQ：{{ contact.qq }}</p>
          <p>微信：{{ contact.wechat }}</p>
        </div>
      </div>

      <!-- Reseller Types -->
      <h2 class="text-2xl font-bold text-white mb-6">经销商分类</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div v-for="type in resellerTypes" 
          :key="type.name"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h3 class="text-xl font-bold" :class="type.warning ? 'text-red-400' : 'text-white'">
              {{ type.name }}
            </h3>
            <p class="text-gray-400 mt-4">{{ type.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 