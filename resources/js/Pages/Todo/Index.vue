<script setup>
import Breadcrumb from "../../components/Breadcrumb.vue";

defineProps({ list: Array });
</script>

<template>
  <Breadcrumb title="TODO APP" subtitle="ADD TASK" />

  <section class="section">
    <div class="container mb-5">
      <div class="row d-flex justify-content-center">
        <div class="col-7">
          <div class="card px-3">
            <div class="card-body">
              <div class="add-items d-flex">
                <input
                  type="text"
                  class="form-control todo-list-input"
                  placeholder="What do you need to do today?"
                />
                <button
                  class="add btn btn-primary font-weight-bold todo-list-add-btn"
                >
                  Add
                </button>
              </div>
              <div class="list-wrapper">
                <ul class="todo-list">
                  <li>
                    <div class="form-check d-flex">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" /> For what
                        reason would it be advisable.
                        <i class="input-helper"></i
                      ></label>
                      <i class="bx bx-x remove float-end"></i>
                    </div>
                  </li>
                  <li class="completed">
                    <div class="form-check d-flex">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked /> For
                        what reason would it be advisable.
                        <i class="input-helper"></i
                      ></label>
                      <i class="bx bx-x remove float-end"></i>
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

