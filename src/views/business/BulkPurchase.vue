<script setup lang="ts">
import { ref } from 'vue'

const purchaseInfo = ref({
  small: {
    quantity: '≤100份',
    contact: {
      qqGroup: '991607397'
    }
  },
  large: {
    quantity: '＞100份',
    contact: {
      qq: '1559689519',
      wechat: 'xingji_software'
    }
  }
})
</script>

<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-4xl font-bold text-white mb-12 text-center">批量采购</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Small Orders -->
        <div class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-white mb-4">小批量采购</h2>
            <p class="text-gray-400 mb-6">{{ purchaseInfo.small.quantity }}</p>
            <div class="text-gray-400">
              <p>QQ群：{{ purchaseInfo.small.contact.qqGroup }}</p>
            </div>
          </div>
        </div>

        <!-- Large Orders -->
        <div class="group relative">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 blur"></div>
          <div class="relative bg-gray-800/50 backdrop-blur-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-white mb-4">大批量采购</h2>
            <p class="text-gray-400 mb-6">{{ purchaseInfo.large.quantity }}</p>
            <div class="text-gray-400 space-y-2">
              <p>QQ：{{ purchaseInfo.large.contact.qq }}</p>
              <p>微信：{{ purchaseInfo.large.contact.wechat }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template> 