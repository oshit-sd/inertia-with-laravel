<script setup>
import Breadcrumb from "../components/Breadcrumb.vue";

defineProps({ data: Array });
</script>

<template>
  <Breadcrumb title="QUOTE" />

  <div class="row d-flex justify-content-center">
    <div class="col-8 my-5 pb-5">
      <h2>{{ data[0].quote }}</h2>
      <p>{{ data[0].author }} - {{ data[0].category }}</p>
    </div>
  </div>
</template>