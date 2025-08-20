<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: 'Join Us | XINGJI Studio',
  meta: [
    {
      name: 'description',
      content: '成员福利：每个XINGJI工作室成员都可以免费申请一台云服务器！只要你干的出色，每个项目你都可以拿到奖金！甚至我们可以为你买一台电脑！\
只要你对该项目做出贡献，我们一定会在下期视频点名表扬！加入我们，享受所有初中生工作室里最好的福利！\n\
及其人性的作息：从不强迫你干活！如果你有所耳闻XJ380的开发速度，你就知道有多宽松了。（但似乎最近要严抓了？）\n\
全国顶尖的初中生工作室：XINGJI工作室创立于2017年，历史悠久。目前创始人在读初中，工作室也已取得卓越成就。加入我们，你也可以！\n\
丰富的资源：XINGJI工作室拥有丰富的资源，包括但不限于：C/C++、汇编、图形化、游戏开发、美术、服务器等。',
    },
  ],
})

const positions = ref([
  {
    name: '徐晨皓',
    webname: 'KALI',
    age: '< 18岁',
    qqid: '3895094720和2461592148',
    vxid: '未知',
    githuburl: 'https://github.com/osfxkali',
    bilibili: 'https://b23.tv/Ii0Mn7S （kalifxos）',
    address: '中国河北省 中国天津市',
    description: '涉嫌剽窃他人知识产权、伪造获奖经历（宣称为NOIP一等奖及CSP-S三等奖，查无此人）、伪造律师函、DDoS攻击、非法侵入计算机信息系统罪、破坏计算机信息系统罪、诈骗罪、侵犯商业秘密罪、诬告陷害罪、寻衅滋事罪、侵犯他人名誉权。此人C语言连结构体都不会，疑似电影看多了，自称“3301”，大家当乐子看即可。提醒一下大家别被气着了（实际上更可能笑岔气，徐晨皓这招太狠了）。此外我们的大佬还拥有一个伪OS（已删库），连引导都没有，太高级了！不仅如此，这位大佬还试图打垮Cloudflare、微软等知名大厂来袭击我们网站，太棒了！',
  },
])

</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-4 text-center">互联网黑名单 + 乐子存储库</h1>
      <p class="text-gray-300 mb-16 text-center">
        互联网生物多样性大赏，可以来看看有没有什么好笑的，顺便进食后人（警示后人）。同时欢迎投稿至 board@xingjisoft.top 。
      </p>

      <!-- 你好，这是临时放的史，过段时间就删 -->
      <div class="grid grid-cols-1 md:grid-cols-1 gap-10 mb-8">
        <div class="relative bg-red-800/50 backdrop-blur-md rounded-2xl p-8">
          <div class="flex justify-between items-start mb-4">
            <div>
              <h2 class="text-2xl font-bold text-white">警告 WARNING</h2>
            </div>
          </div>
          <p class="text-gray-300 mb-4">
            本页面采用的所有个人信息均为对方已经公开（如写在个人主页）的信息，为合法途径获得，我们非常不<span class="font-bold text-white"> 建议您对其进行“开盒” </span>，
            当乐子看就行了。另外部分人可能会让您笑岔气，建议谨慎观看。您可以为我们补充信息，但是您将承担对应的法律责任（他自己公开的就没事儿啦~）。
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-1 gap-10 mb-16">
        <div v-for="position in positions" 
          :key="position.name"
          class="group relative">
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <div class="flex justify-between items-start mb-4">
              <div>
                <h2 class="text-2xl font-bold text-white">{{ position.name }}</h2>
              </div>
            </div>
            <p class="text-gray-300 mb-4">网名：{{ position.webname }}</p>
            <p class="text-gray-300 mb-4">年龄：{{ position.age }}</p>
            <p class="text-gray-300 mb-4">QQ：{{ position.qqid }}</p>
            <p class="text-gray-300 mb-4">微信：{{ position.vxid }}</p>
            <p class="text-gray-300 mb-4">Github：{{ position.githuburl }}</p>
            <p class="text-gray-300 mb-4">B站：{{ position.bilibili }}</p>
            <p class="text-gray-300 mb-4">地址：{{ position.address }}</p>
            <p class="text-gray-50 mb-4">{{ position.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 
