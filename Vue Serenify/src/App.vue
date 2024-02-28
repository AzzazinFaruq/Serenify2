<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Footer from './components/Footer.vue'
import Navbar from './components/Navbar.vue'
</script>

<template>
  <navbar></navbar>

  <main>
    <router-view />
    <Footer></Footer>
  </main>
</template>
