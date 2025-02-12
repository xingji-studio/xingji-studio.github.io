<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Ads | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const contactInfo = ref({
  description: '@人朝的小郭同学 视频恰饭',
  qqGroup: '991607397',
  email: 'business@xingjisoft.top'
})
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">XINGJI商务平台-广告插入</h1>

      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-6">{{ contactInfo.description }}</h2>
        <div class="space-y-4">
          <div class="flex items-center space-x-4">
            <span class="text-gray-400">QQ群：</span>
            <span class="text-blue-400">{{ contactInfo.qqGroup }}</span>
          </div>
          <div class="flex items-center space-x-4">
            <span class="text-gray-400">邮箱：</span>
            <a :href="`mailto:${contactInfo.email}`" 
              class="text-blue-400 hover:text-blue-300 transition-colors duration-200">
              {{ contactInfo.email }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 