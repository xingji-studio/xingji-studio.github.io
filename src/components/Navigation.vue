<script setup lang="ts">
import { ref } from 'vue'

const isOpen = ref(false)

const menuItems = ref([
  { name: '首页', link: '/' },
  { name: '操作系统', link: '/os/xj380' },
  { name: '星际云', link: 'https://cloud.xingjisoft.top/' },
  { name: '软件及游戏', link: '/software' },
  { name: '硬件产品', link: '/hardware' },
  { name: '商务平台', link: '/business' },
  { name: '关于我们', link: '/about' },
  { name: '加入我们', link: '/join' },
  { name: '开源软件', link: '/open-source' }
])
</script>

<template>
  <nav class="fixed w-full z-50 backdrop-blur-md bg-gray-900/70 border-b border-gray-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <router-link to="/" class="flex items-center space-x-2">
              <img src="/files/XINGJI_blueback.png" alt="XINGJI" class="h-10 w-auto" />
              <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                星际工作室
              </span>
            </router-link>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <template v-for="item in menuItems" :key="item.name">
                <router-link v-if="!item.link.startsWith('http')"
                  :to="item.link" 
                  class="relative group px-3 py-2 text-sm font-medium">
                  <span class="relative z-10 text-gray-300 group-hover:text-white transition-colors duration-200">
                    {{ item.name }}
                  </span>
                  <div class="absolute inset-0 h-full w-full rounded-md bg-white/0 group-hover:bg-white/10 transition-all duration-200 -z-0"></div>
                </router-link>
                <a v-else
                  :href="item.link"
                  target="_blank"
                  class="relative group px-3 py-2 text-sm font-medium">
                  <span class="relative z-10 text-gray-300 group-hover:text-white transition-colors duration-200">
                    {{ item.name }}
                  </span>
                  <div class="absolute inset-0 h-full w-full rounded-md bg-white/0 group-hover:bg-white/10 transition-all duration-200 -z-0"></div>
                </a>
              </template>
            </div>
          </div>
        </div>
        
        <div class="md:hidden">
          <button @click="isOpen = !isOpen" 
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none">
            <span class="sr-only">打开菜单</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div v-show="isOpen" 
      class="md:hidden backdrop-blur-md bg-gray-900/90 border-b border-gray-800/50">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <template v-for="item in menuItems" :key="item.name">
          <router-link v-if="!item.link.startsWith('http')"
            :to="item.link"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">
            {{ item.name }}
          </router-link>
          <a v-else
            :href="item.link"
            target="_blank"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">
            {{ item.name }}
          </a>
        </template>
      </div>
    </div>
  </nav>
</template>

<style scoped>
.router-link-active span {
  @apply text-white;
}
.router-link-active div {
  @apply bg-white/10;
}
</style> 