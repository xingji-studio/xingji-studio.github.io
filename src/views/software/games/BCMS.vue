<script setup lang="ts">
import GameLayout from '../../../components/software/GameLayout.vue'
import { useHead } from '@vueuse/head'

useHead({
  title: '挖矿模拟器 | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})
</script>

<template>
  <GameLayout 
    title="挖矿模拟器"
    subtitle="XINGJI工作室远古之作（也许算黑历史？）">
    <div class="space-y-8">
      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">内容说明</h2>
        <p class="text-gray-400">
          在比特币最火热的时候加入矿工们的行列！在矿场里赚的盆满钵满——又或者倾家荡产。挖矿模拟器现已推出。
        </p>
      </div>

      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">开源协议或分级</h2>
        <p class="text-gray-400">已以MIT协议开源。XRB分级：3+</p>
      </div>

      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">下载</h2>
        <p class="text-gray-400 mb-4">最新版本：1.8.0</p>
        <div class="flex flex-col space-y-4">
          <a href="https://github.com/xingji-studio/BitCoinMiningSimulator/releases"
             class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200 w-fit">
            Github下载
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </GameLayout>
</template> 