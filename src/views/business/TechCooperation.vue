<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Tech Cooperation | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const cooperationTypes = ref([
  {
    title: '知名UP主/博主',
    description: '粉丝≥100000',
    link: 'mailto:business@xingjisoft.top?subject=技术合作（知名UP主\\博主） &body=UP主\\博主所在平台：________________%0D%0AUP主\\博主名称：________________________%0D%0A粉丝量：_____._万%0D%0A合作内容：',
    contact: {
      qq: '1559689519',
      wechat: 'xingji_software'
    }
  },
  {
    title: '企业合作',
    description: '含个体工商户',
    link: 'mailto:business@xingjisoft.top?subject=技术合作（企业） &body=企业名称：________________________%0D%0A企业注册编号：____________%0D%0A合作内容：',
    contact: {
      qq: '1559689519',
      wechat: 'xingji_software'
    }
  },
  {
    title: '个人合作',
    description: '请加QQ群',
    contact: {
      qqGroup: '991607397'
    }
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">技术合作</h1>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div v-for="type in cooperationTypes"
          :key="type.title"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ type.title }}</h2>
            <p class="text-gray-400 mb-6">{{ type.description }}</p>
            
            <div class="space-y-4">
              <a v-if="type.link"
                :href="type.link"
                class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200">
                立即合作
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
              
              <div v-if="type.contact" class="text-gray-400 space-y-2">
                <p v-if="type.contact.qq">QQ：{{ type.contact.qq }}</p>
                <p v-if="type.contact.wechat">微信：{{ type.contact.wechat }}</p>
                <p v-if="type.contact.qqGroup">QQ群：{{ type.contact.qqGroup }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 