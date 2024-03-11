<script setup>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import Publishing from "./components/Publishing.vue";
</script>

<template>
  <Header />

  <!-- MAIN PART -->
  <slot />
  <!-- MAIN PART /-->

  <Publishing />

  <Footer />
</template>