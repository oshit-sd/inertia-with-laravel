<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import Breadcrumb from "@components/Breadcrumb.vue";

defineProps({ errors: Object });
const data = ref({});
const spinner = ref(false);

function getQuote() {
  spinner.value = true;
  axios
    .get("/get-quote")
    .then((res) => {
      data.value = res.data;
    })
    .finally((alw) => (spinner.value = false));
}

onMounted(() => {
  getQuote();
});
</script>

<template>
  <Breadcrumb title="QUOTE" />

  <div class="col-12 text-center my-3">
    <button @click="getQuote()" class="bg-info px-2 border border-info rounded">
      <div
        v-if="spinner"
        class="spinner-border text-dark spinner-border-sm"
        role="status"
      >
        <span class="visually-hidden">Loading...</span>
      </div>
      <span v-else> <i class="bx bx-sync"></i> LOAD RANDOM</span>
    </button>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-8 mb-5 pb-5">
      <template v-if="Object.keys(data).length > 0">
        <h2>{{ data.quote }}</h2>
        <p>{{ data.author }}</p>
      </template>
    </div>
  </div>
</template>