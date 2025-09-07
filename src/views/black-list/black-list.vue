<script setup lang="ts">
import { ref } from 'vue'
import { useHead } from '@vueuse/head'

useHead({
  title: '黑名单 | XINGJI Studio'
})

const positions = ref([
{
    name: '钱嘉琪（不确定）',
    webname: '云眠（上海兽化网络科技有限公司）',
    age: '> 16岁',
    qqid: '3360996909',
    vxid: '未知',
    id: '未知',
    githuburl: '未知',
    bilibili: '未知',
    address: '中国江苏省 中国上海市',
    description: '涉嫌剽窃他人知识产权版权274余项、专利2项；恶意抢注商标34项、DDoS攻击（打穿过Cloudflare）、非法侵入计算机信息系统罪、破坏计算机信息系统罪、诈骗罪',
  },
  {
    name: '徐晨皓',
    webname: 'KALI',
    age: '< 18岁',
    qqid: '3895094720和2461592148',
    vxid: '未知',
    id: '未知',
    githuburl: 'https://github.com/osfxkali',
    bilibili: 'https://b23.tv/Ii0Mn7S （kalifxos）',
    address: '中国河北省 中国天津市',
    description: '涉嫌剽窃他人知识产权、伪造获奖经历（宣称为NOIP一等奖及CSP-S三等奖，查无此人）、伪造律师函、DDoS攻击、非法侵入计算机信息系统罪、破坏计算机信息系统罪、诈骗罪、侵犯商业秘密罪、诬告陷害罪、寻衅滋事罪、侵犯他人名誉权，自称“3301”。拥有一个伪OS（已删库），试图打垮Cloudflare和微软来攻击我们网站。',
  },
  {
    name: '未知',
    webname: '蓝冰',
    age: '14岁',
    qqid: '1348304436',
    vxid: '未知',
    id: '未知',
    githuburl: '无',
    bilibili: ' https://b23.tv/yGOvq0N（少年蓝冰）',
    address: '中国上海市',
    description: '涉嫌诽谤、滥交乱搞牵扯别人。',
  },
  {
    name: '苏一文',
    webname: '瑞迪Official',
    age: '11岁',
    qqid: '未知',
    vxid: '未知',
    id: '未知',
    githuburl: '无',
    bilibili: 'https://space.bilibili.com/1277965588（瑞迪Official）',
    address: '中国河南省',
    description: '涉嫌伪造病历、人身攻击他人、伪爱国（辱骂中华人民共和国但并非故意）。',
  },
  {
    name: '未知',
    webname: '年轻人',
    age: '18 ~ 19岁',
    qqid: '2934495340',
    vxid: '未知',
    id: '未知',
    githuburl: '无',
    bilibili: '未知',
    address: '中国山西省阳泉市',
    description: '涉嫌诈骗罪。',
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

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-16">
        <div v-for="position in positions" 
          :key="position.name"
          class="group relative">
          <div class="relative bg-gray-800/0 backdrop-blur-md rounded-2xl p-8">
            <div class="flex justify-between items-start mb-4">
              <div>
                <h2 class="text-2xl font-bold text-white">{{ position.webname }}</h2>
              </div>
            </div>
            <p class="text-gray-300 mb-4">姓名：{{ position.name }}</p>
            <p class="text-gray-300 mb-4">年龄：{{ position.age }}</p>
            <p class="text-gray-300 mb-4">QQ：{{ position.qqid }}</p>
            <p class="text-gray-300 mb-4">身份ID：{{ position.id }}</p>
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
