<script setup lang="ts">
import { useRouter } from 'vue-router'
import { useHead } from '@vueuse/head'

useHead({
  title: 'XJ380 | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: 'Defautl description',
    },
  ],
})

const router = useRouter()

const handleDownload = () => {
  router.push('/os/xj380/download')
}
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-16">
    <!-- Hero Section -->
    <section class="relative py-20">
      <div class="absolute inset-0 overflow-hidden">
        <div
          class="absolute inset-0 bg-[url('/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
        </div>
        <div
          class="absolute inset-0 bg-gradient-to-br from-blue-500/30 via-purple-500/30 to-pink-500/30 backdrop-blur-3xl">
        </div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
          XJ380操作系统 —— 极少数的64位操作系统
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8">
          更快、更小、更安全
        </p>
        <button @click="handleDownload"
          class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold hover:from-blue-600 hover:to-purple-600 transition-all duration-200 shadow-lg hover:shadow-blue-500/25">
          下载XJ380操作系统
        </button>
      </div>
    </section>

    <!-- Logo Section -->
    <section class="max-h-64 p-4 flex justify-center">
      <div class="max-w-7xl flex justify-center gap-2">
        <img src="/LOGO带底.png" alt="XJ380" class="overflow-hidden object-contain" />
        <img src="/ultra版LOGO带底.png" alt="XJ380 ULTRA" class="overflow-hidden object-contain" />
      </div>
    </section>

    <!-- Features Section -->
    <section class="p-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-white mb-4">XJ380有什么特别？</h3>
            <p class="text-gray-400">
              XJ380采用XSK2.1内核，先进安全稳定。64位架构，发挥设备的最大潜力。方便的GUI，灵活的命令行，无论你喜欢图形化还是命令行都可以获得最好的体验。
            </p>
          </div>
          <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-white mb-4">XJ380与前两个测试版有什么区别？</h3>
            <p class="text-gray-400">
              XJ380(Code Singularity)采用UEFI进行引导而不是MBR；使用了64位架构而不是32位；启动方式从软盘转为了任何支持FAT32的媒介；文件系统从FAT12变成了FAT32及XAFS。
            </p>
          </div>
          <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-white mb-4">XJ380有怎样的生态？</h3>
            <p class="text-gray-400">
              XJ380为第三方软件提供了非常方便的API接口，仅需几分钟就可快速上手。我们已与多个工作室和个人开发者达成合作。
            </p>
          </div>
          <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-white mb-4">XJ380的交互怎么样？</h3>
            <p class="text-gray-400">
              XJ380采用GUI和命令行终端进行控制，权限完全放开，只要你有管理员密码（由自己设定）即可上天入地（例如干掉引导）。XJ380采用32位色配合XINGJI GlassUI以实现玻璃一般
              的美丽效果。桌面壁纸可通过设置进行更换，支持多种编码格式。方向键命令回档，节省时间。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Version Info -->
    <section class="py-10 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
          <h3 class="text-2xl font-bold text-white mb-4">XJ380的各个版本有什么区别？又如何获取？</h3>
          <p class="text-gray-400">
            注：ULTRA版≈抢先体验，更新新内容一段时间后会慢慢转移至普通版。另外 B站@人朝的小郭同学 会不定时送一点激活码啥的，欢迎三联关注:)
          </p>
        </div>
      </div>
    </section>
  </div>
</template>