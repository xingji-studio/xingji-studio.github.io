<script setup lang="ts">
import { ref } from 'vue'

const isOpen = ref(false);

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
]);
</script>

<template>
  <nav class="fixed w-full z-50 backdrop-blur-md bg-gray-900/50">
    <ul class="flex h-20 items-center justify-between">
      <li class="nav-left">
        <ul class="flex h-20 items-center">
          <li class="h-full overflow-hidden">
            <router-link to="/" class="flex items-center outline-none p-4 h-full w-full">
              <img src="/files/XINGJI_blueback.png" alt="XINGJI" class="h-10 w-auto ml-2 mr-2" />
              <span class="ml-2 mr-2 text-2xl font-bold text-white/90">
                星际工作室
              </span>
            </router-link>
          </li>
          <template v-for="item in menuItems" :key="item.name">
            <li class="hidden md:block overflow-hidden h-full">
              <router-link v-if="!item.link.startsWith('http')" :to="item.link"
                class="p-4 pl-6 pr-6 h-full w-full flex items-center group text-sm font-medium hover:bg-gray-400/10 transition-all duration-200 item">
                <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
                  {{ item.name }}
                </span>
              </router-link>
              <a v-else :href="item.link" target="_blank"
                class="p-4 pl-6 pr-6 h-full w-full flex items-center group text-sm font-medium hover:bg-gray-400/10 transition-all duration-200 item">
                <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
                  {{ item.name }}
                </span>
              </a>
            </li>
          </template>
        </ul>
      </li>
      <!-- For moblie: Menu Button -->
      <li class="md:hidden nav-right w-20 h-20">
        <button @click="isOpen = !isOpen"
          class="flex items-center justify-center w-full h-full rounded-md text-gray-400/90 hover:text-white hover:bg-gray-400/10 transition-all duration-200 outline-none">
          <span class="sr-only">打开菜单</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path :class="{ 'opacity-0': isOpen }" class="transition-all duration-200" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'opacity-0': !isOpen }" class="transition-all duration-200" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </li>
    </ul>
  </nav>
  <nav :class="{ 'opacity-0 invisible': !isOpen }"
  class="fixed top-20 z-50 left-0 w-full md:hidden backdrop-blur-md bg-gray-900/50 transition-all duration-200 overflow-hidden">
    <!-- For moblie: Vertical menu -->
    <ul>
      <template v-for="item in menuItems" :key="item.name">
        <router-link v-if="!item.link.startsWith('http')" :to="item.link"
          class="p-4 pl-6 pr-6 h-full w-full flex items-center group font-medium hover:bg-gray-400/10 transition-all duration-200 item">
          <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
            {{ item.name }}
          </span>
        </router-link>
        <a v-else :href="item.link" target="_blank"
          class="p-4 pl-6 pr-6 h-full w-full flex items-center group font-medium hover:bg-gray-400/10 transition-all duration-200 item">
          <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
            {{ item.name }}
          </span>
        </a>
      </template>
    </ul>
  </nav>
</template>

<style scoped>
.item.router-link-active span {
  @apply text-white;
}

.item.router-link-active {
  @apply bg-white/10;
}
</style>