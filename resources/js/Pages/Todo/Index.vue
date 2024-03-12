<script setup>
import { reactive, ref } from "vue";
import { router } from "@inertiajs/vue3";

import Breadcrumb from "../../components/Breadcrumb.vue";

defineProps({ data: Array, errors: Object });

const delSpinner = ref(false);
const spinner = ref(false);
const form = reactive({
  task: null,
});

function submit() {
  spinner.value = true;
  router.post("/todo", form, {
    preserveScroll: true,
    onError: (errors) => {
      spinner.value = false;
    },
    onFinish: (visit) => {
      form.task = null;
      spinner.value = false;
    },
  });
}

function update(item) {
  delSpinner.value = item.id;
  router.put(`/todo/${item.id}`, item, {
    preserveScroll: true,
    onError: (errors) => {
      delSpinner.value = false;
    },
    onFinish: (visit) => {
      form.task = null;
      delSpinner.value = false;
    },
  });
}

function destroy(item) {
  delSpinner.value = item.id;
  router.delete(`/todo/${item.id}`, {
    preserveScroll: true,
    onError: (errors) => {
      spinner.value = false;
    },
    onFinish: (visit) => {
      form.task = null;
      spinner.value = false;
    },
  });
}
</script>

<template>
  <Breadcrumb title="TODO APP" subtitle="ADD TASK" />

  <section class="section pt-0">
    <div class="container mb-5">
      <div class="row d-flex justify-content-center">
        <div class="col-7">
          <div class="card px-3">
            <div class="card-body">
              <form @submit.prevent="submit" :disabled="form.processing">
                <p class="text-danger" v-if="errors.task">
                  {{ errors.task }}
                </p>
                <div class="add-items d-flex">
                  <input
                    v-model="form.task"
                    type="text"
                    class="form-control todo-list-input"
                    placeholder="What do you need to do today?"
                    required
                  />
                  <button
                    type="submit"
                    class="add btn btn-primary font-weight-bold todo-list-add-btn"
                  >
                    <div
                      v-if="spinner"
                      class="spinner-border text-info spinner-border-sm"
                      role="status"
                    >
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <span v-else>ADD</span>
                  </button>
                </div>
              </form>

              <div class="list-wrapper">
                <ul class="todo-list">
                  <li
                    v-for="(item, key) in data"
                    :key="key"
                    :class="item.status == 'done' ? 'completed' : 'form-check'"
                  >
                    <div class="form-check d-flex justify-content-between">
                      <label class="form-check-label">
                        <input
                          @click="update(item)"
                          class="checkbox"
                          type="checkbox"
                          :checked="item.status == 'done' ? true : false"
                        />
                        {{ item.task }} <i class="input-helper"></i>
                      </label>

                      <!-- <i
                        v-if="item.status != 'done'"
                        @click="destroy(item)"
                        class="bx bx-x remove float-end"
                      ></i> -->

                      <div
                        v-if="delSpinner == item.id"
                        class="spinner-border text-danger spinner-border-sm"
                        role="status"
                      >
                        <span class="visually-hidden">Loading...</span>
                      </div>
                      <span v-else>
                        <i
                          v-if="item.status != 'done'"
                          @click="destroy(item)"
                          class="bx bx-x remove float-end"
                        ></i>
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

