<script setup lang="ts">
import { ref, watch } from 'vue'

const isOpen = ref(false);

const menuItems = ref([
  { name: '首页', link: '/' },
  { name: '操作系统', link: '/os/xj380' },
  { name: '星际云', link: 'https://cloud.xingjisoft.top/' },
  { name: '软件及游戏', link: '/software' },
  { name: '商务平台', link: '/business' },
  { name: '关于我们', link: '/about' },
  { name: '加入我们', link: '/join' },
  { name: '开源软件', link: '/open-source' }
]);

watch(isOpen, (newVal, _oldVal) => {
  if (newVal) {
    document.body.classList.add("overflow-hidden")
  }else{
    document.body.classList.remove("overflow-hidden")
  }
})

</script>

<template>
  <nav class="fixed min-w-full z-50 backdrop-blur-md bg-gray-900/50">
    <ul class="flex h-16 items-center justify-between">
      <li class="nav-left h-16">
        <ul class="flex items-center justify-start h-full">
          <li class="h-full whitespace-nowrap">
            <router-link to="/" class="flex items-center justify-center outline-none pl-4 pr-4 h-full w-max">
              <img src="/files/XINGJI_blueback.png" alt="XINGJI" class="h-8 mr-1" />
              <span class="ml-1 text-2xl font-bold text-white/90">
                星际工作室
              </span>
            </router-link>
          </li>
          <template v-for="item in menuItems" :key="item.name">
            <li class="hidden lg:block whitespace-nowrap h-full">
              <router-link v-if="!item.link.startsWith('http')" :to="item.link"
                class="pl-4 pr-4 h-full w-max flex items-center justify-center group text-sm font-medium hover:bg-gray-400/10 transition-all duration-200 item">
                <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
                  {{ item.name }}
                </span>
              </router-link>
              <a v-else :href="item.link" target="_blank"
                class="pl-4 pr-4 h-full w-max flex items-center justify-center group text-sm font-medium hover:bg-gray-400/10 transition-all duration-200 item">
                <span class="text-gray-300 group-hover:text-white transition-colors duration-200">
                  {{ item.name }}
                </span>
              </a>
            </li>
          </template>
        </ul>
      </li>
      <!-- For moblie: Menu Button -->
      <li class="lg:hidden nav-right w-16 h-16">
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
  <nav id="mobile-navbar" :class="{ 'opacity-0 invisible': !isOpen }"
    class="fixed top-16 z-50 left-0 w-full h-[calc(100%-4rem)] lg:hidden backdrop-blur-md bg-gray-900/50 transition-all duration-200 overflow-auto dark">
    <!-- For moblie: Vertical menu -->
    <ul>
      <template v-for="item in menuItems" :key="item.name">
        <router-link v-if="!item.link.startsWith('http')" :to="item.link" @click="isOpen = false"
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