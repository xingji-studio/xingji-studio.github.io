<script setup lang="ts">
import GameLayout from '../../components/software/GameLayout.vue'
import { useHead } from '@vueuse/head'

useHead({
  title: '鹊桥引擎 | XINGJI Studio',
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
    title="鹊桥引擎（BridgeEngine）"
    subtitle="更加现代、方便、高级、跨平台的图形库兼2.5D引擎">
    <div class="space-y-8">
      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">产品介绍</h2>
        <p class="text-gray-400">
          您是否还在因为不会建模，或者主流2.5D引擎过于老套简陋还频繁出现问题而烦恼？还是因为Win32API过于繁杂而崩溃？又或者是因为不同平台需要写不同代码而烦闷？
          是时候更换引擎了！XINGJI 鹊桥引擎（BridgeEngine）将为您带来前所未有的开发与使用体验：更高清、更高效、更便捷、更容易上手。无论您是个人开发者还是大型
          组织，XINGJI 鹊桥引擎都是您的不二之选！仅需几行代码就可以创建一个图形化应用程序，告别黑框框；重新编译即可在多个平台上运行；配合XINGJI 星穹（Skyland）
          光追，
        </p>
      </div>

      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">开源协议</h2>
        <p class="text-gray-400">已以XOSL协议开源。</p>
      </div>

      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-4">下载</h2>
        <p class="text-gray-400 mb-4">最新版本：0.0.1</p>
        <div class="flex flex-col space-y-4">
          <a href="https://github.com/xingji-studio/BridgeEngine"
             class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200 w-fit">
            源代码（Github）
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </GameLayout>
</template> 