<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'About | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: '在2017年的一个冬天，XINGJI工作室（此时未更名为工作室）在人大附中朝阳学校（212校区）成立。 \
最开始工作室由2017级9班的三位同学组建（右图右3右4），最开始从事任何杂活，并大量吸收成员， \
巅峰时拥有高达17名成员（班里一共39人），包括右图全部同学都加入过XINGJI工作室。并且在2020 \
年更名为XINGJI工作室。在2020年，全班模仿我们的其他小团体如雨后春笋般涌出，例如右图右2。',
    },
  ],
})

const ceoInfo = ref({
  name: '@人朝的小郭同学',
  title: '董事长，CEO，XJ380操作系统总工程师',
  achievements: [
    'XINGJI工作室创始人',
    '朝阳区信息学素养前30名，校级选拔满分通过',
    '人大附中朝阳学校2024学年度第13周升旗仪式护旗手',
    'XJ380操作系统发明者',
    'XINGJI工作室董事长兼CEO',
    '人大附中朝阳学校2024艺术节电子邀请函开发者'
  ]
})

const history = ref([
  {
    year: 2017,
    events: [
      '在人大附中朝阳学校（212校区）成立',
      '最开始由2017级9班的三位同学组建',
      '巅峰时拥有高达17名成员（班里一共39人）'
    ]
  },
  {
    year: 2020,
    events: [
      '更名为XINGJI工作室',
      '全班模仿的其他小团体如雨后春笋般涌出',
      '定义了全班的法定货币：数学作业纸，并大受欢迎'
    ]
  },
  {
    year: 2021,
    events: [
      'XINGJI在手工业迅速衰落，转战软件',
      '做出了第一个作品：小游戏《挖矿模拟器》',
      '该游戏一经推出，大受欢迎'
    ]
  },
  {
    year: 2022,
    events: [
      '手工业于2022年彻底衰落，结束手工业及其在人朝的业务',
      '12月正式启动XJ380计划',
      '采用XINGJI-hairbote内核'
    ]
  },
  {
    year: 2023,
    events: [
      '6月1日重构XJ380',
      '内核改为XJ-Kernel 1.1',
      '主力开发成员Simoger退出XINGJI'
    ]
  },
  {
    year: 2024,
    events: [
      '6月1日，XJ380再次重构',
      '内核架构变更为XJ-Kernel 2.0',
      '采用UEFI代替了原来的MBR引导方式'
    ]
  }
])
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">关于我们/我们的历史</h1>

      <!-- History Introduction with Image -->
      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8 mb-12">
        <div class="flex flex-col lg:flex-row gap-8">
          <div class="lg:w-2/3">
            <p class="text-gray-400 leading-relaxed">
              在2017年的一个冬天，XINGJI工作室（此时未更名为工作室）在人大附中朝阳学校（212校区）成立。
              最开始工作室由2017级9班的三位同学组建（右图右3右4），最开始从事任何杂活，并大量吸收成员，
              巅峰时拥有高达17名成员（班里一共39人），包括右图全部同学都加入过XINGJI工作室。并且在2020
              年更名为XINGJI工作室。在2020年，全班模仿我们的其他小团体如雨后春笋般涌出，例如右图右2。
            </p>
          </div>
          <div class="lg:w-1/3">
            <img 
              src="/about/right1.jpg" 
              alt="XINGJI工作室早期成员" 
              class="w-full h-auto rounded-xl shadow-lg"
            />
          </div>
        </div>
      </div>

      <!-- CEO Info -->
      <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-8 mb-12">
        <div class="flex flex-col md:flex-row gap-8">
          <img src="/about/头像.png" alt="CEO" class="w-48 h-48 rounded-xl object-cover" />
          <div>
            <h2 class="text-2xl font-bold text-white mb-2">{{ ceoInfo.name }}</h2>
            <h3 class="text-xl text-gray-400 mb-4">{{ ceoInfo.title }}</h3>
            <ul class="space-y-2">
              <li v-for="achievement in ceoInfo.achievements" 
                :key="achievement"
                class="text-gray-400">
                {{ achievement }}
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- History Timeline -->
      <div class="space-y-8">
        <div v-for="period in history" 
          :key="period.year"
          class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ period.year }}</h2>
            <ul class="space-y-2">
              <li v-for="event in period.events" 
                :key="event"
                class="text-gray-400">
                {{ event }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 