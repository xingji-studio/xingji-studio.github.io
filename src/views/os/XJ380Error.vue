<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'FAQ XJ380 | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const bootErrors = ref([
  {
    code: 'OPEN_ROOT_DIR_ERROR',
    cause: '无法获取ESP分区文件目录。',
    possible: 'ESP分区损坏。',
    solution: '使用例如DiskGenius的软件对分区进行重建并重新安装XJ380。'
  },
  {
    code: 'KERNEL_NOT_FOUND',
    cause: '找不到XJ380内核。',
    possible: 'XJ380内核文件缺失。',
    solution: '重新安装XJ380。'
  },
  {
    code: 'CANNOT_READ_KERNEL',
    cause: '无法读取XJ380内核。',
    possible: 'XJ380内核损坏。',
    solution: '重新安装XJ380。'
  },
  {
    code: 'CANNOT_ALLOC_MEMORY',
    cause: '无法分配足够的内存。',
    possible: '可用内存不足。',
    solution: '检查配置是否符合XJ380运行的最低要求。'
  }
])

const runtimeErrors = ref([
  {
    code: 'CANNOT_ALLOC_MEMORYMAP',
    cause: '无法开辟足够的内存空间用于存放MemoryMap。',
    possible: '可用内存不足。',
    solution: '检查配置是否符合XJ380运行的最低要求。'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-8">XJ380操作系统故障代码</h1>
      <p class="text-gray-400 mb-12">
        本页面将列举XJ380操作系统所有故障代码并提供解决方案。
      </p>

      <!-- Boot Errors -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-white mb-6">引导故障类</h2>
        <p class="text-gray-400 mb-4">
          XJ380在引导阶段发生故障。它一般像下面这样子：
        </p>
        <img src="/error/boot_error.png" alt="Boot Error" class="w-1/3 mb-8 rounded-xl" />
        
        <div class="grid grid-cols-1 gap-6">
          <div v-for="error in bootErrors" 
               :key="error.code"
               class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-6">
            <h3 class="text-xl font-bold text-white mb-4">{{ error.code }}</h3>
            <div class="space-y-2">
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">故障原因：</span>
                {{ error.cause }}
              </p>
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">可能的故障：</span>
                {{ error.possible }}
              </p>
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">解决办法：</span>
                {{ error.solution }}
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Runtime Errors -->
      <div>
        <h2 class="text-2xl font-bold text-white mb-6">普通故障类（白屏死机）</h2>
        <p class="text-gray-400 mb-4">
          XJ380在运行阶段发生故障。它一般像下面这样子：
        </p>
        <img src="/error/error.png" alt="Runtime Error" class="w-1/3 mb-8 rounded-xl" />
        
        <div class="grid grid-cols-1 gap-6">
          <div v-for="error in runtimeErrors" 
               :key="error.code"
               class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-6">
            <h3 class="text-xl font-bold text-white mb-4">{{ error.code }}</h3>
            <div class="space-y-2">
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">故障原因：</span>
                {{ error.cause }}
              </p>
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">可能的故障：</span>
                {{ error.possible }}
              </p>
              <p class="text-gray-400">
                <span class="text-gray-300 font-medium">解决办法：</span>
                {{ error.solution }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 