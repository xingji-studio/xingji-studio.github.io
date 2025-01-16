<script setup lang="ts">
import Navigation from './components/Navigation.vue'
</script>

<template>
  <div class="min-h-screen bg-gray-900">
    <Navigation />
    <router-view></router-view>
  </div>
</template>

<style>
html {
  scroll-behavior: smooth;
}

body {
  @apply bg-gray-900;
}
</style>
