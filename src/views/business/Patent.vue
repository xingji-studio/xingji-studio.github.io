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

const patents = ref([
  {
    name: 'XINGJI REBOOK 二进制存储单元',
    description: '一种高效的二进制数据存储解决方案',
    status: '可转让'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">XINGJI商务平台-专利转让</h1>

      <div class="grid grid-cols-1 gap-8">
        <div v-for="patent in patents" 
          :key="patent.name"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <div class="flex items-center justify-between">
              <h2 class="text-2xl font-bold text-white">{{ patent.name }}</h2>
              <span class="px-4 py-1 bg-blue-500/20 text-blue-400 rounded-full">{{ patent.status }}</span>
            </div>
            <p class="text-gray-400 mt-4">{{ patent.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 