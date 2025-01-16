<script setup lang="ts">
import { ref } from 'vue'

const positions = ref([
  {
    title: 'XJ380 C/C++ 工程师',
    department: 'XINGJI Interactive Software',
    requirements: 'C\\C++至少学到或能理解类和对象，有较强debug能力，有操作系统开发经验者优先。',
    headcount: 8,
    tags: ['有奖金', '急招', '核心项目']
  },
  {
    title: 'XJ380 GCC汇编工程师',
    department: 'XINGJI Interactive Software',
    requirements: '会熟练运用GCC汇编，有较强debug能力。有操作系统开发经验，可同时担任C\\C++开发者。',
    headcount: 2,
    tags: ['有奖金', '急招', '核心项目']
  },
  {
    title: 'C/C++图形化工程师',
    department: 'XINGJI Interactive Software',
    requirements: '会较为熟练运用基础的C\\C++，会使用VisualStudio、封装dll、调试等，学习能力强。有WinAPI开发经验者优先。',
    headcount: 5,
    tags: ['岗位稳定', '急招']
  },
  {
    title: 'DirectX开发工程师',
    department: 'XINGJI Games',
    requirements: '会较为熟练运用基础的C\\C++，会使用VisualStudio、封装dll、调试等，学习能力强。会一点线性代数等内容。有DirectX 3D开发经验者优先。',
    headcount: 5,
    tags: ['岗位稳定', '急招']
  },
  {
    title: '2D游戏美术组',
    department: 'XINGJI Games',
    requirements: '会使用绘制人物、动物、静物等，最好有少量福瑞类绘画经验。',
    headcount: 2,
    tags: ['岗位灵活稳定']
  }
])

const benefits = ref([
  {
    title: '成员福利',
    description: '每个XINGJI工作室成员都可以免费申请一台云服务器！只要你干的出色，每个项目你都可以拿到奖金！甚至我们可以为你买一台电脑！只要你对该项目做出贡献，我们一定会在下期视频点名表扬！加入我们，享受所有初中生工作室里最好的福利！'
  },
  {
    title: '及其人性的作息',
    description: '从不强迫你干活！如果你有所耳闻XJ380的开发速度，你就知道有多宽松了。（但似乎最近要严抓了？）'
  },
  {
    title: '全国顶尖的初中生工作室',
    description: 'XINGJI工作室创立于2017年，历史悠久。目前创始人在读初中，工作室也已取得卓越成就。加入我们，你也可以！'
  },
  {
    title: '丰富的资源',
    description: 'XINGJI工作室已与全国 2 家其他工作室达成合作！来这里，你可以体验到最丰富的资源！'
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">XINGJI工作室，欢迎您的加入！</h1>

      <!-- Job Positions -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div v-for="position in positions" 
          :key="position.title"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <div class="flex justify-between items-start mb-4">
              <div>
                <h2 class="text-2xl font-bold text-white">{{ position.title }}</h2>
                <p class="text-gray-400">{{ position.department }}</p>
              </div>
              <div class="flex gap-2">
                <span v-for="tag in position.tags"
                  :key="tag"
                  class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">
                  {{ tag }}
                </span>
              </div>
            </div>
            <p class="text-gray-400 mb-4">{{ position.requirements }}</p>
            <div class="flex justify-between items-center">
              <p class="text-gray-400">招聘人数：{{ position.headcount }}</p>
              <a href="https://shorturl.at/J1VE9?uid=1559689519"
                target="_blank"
                class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-colors duration-200">
                立即联系我们
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Benefits -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div v-for="benefit in benefits" 
          :key="benefit.title"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ benefit.title }}</h2>
            <p class="text-gray-400">{{ benefit.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 