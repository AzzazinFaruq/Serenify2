<script setup>
import { useModalStatus } from '@/stores/modal_status'
const modal_status = useModalStatus()
const props = defineProps({
  title: String
})
</script>
<template>
  <div>
    <div
      class="modal"
      tabindex="-1"
      role="dialog"
      :class="{ 'd-block': modal_status.getModalStatus }"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ title }}</h5>
            <button
              type="button"
              class="btn-close"
              @click="modal_status.setModalStatus(false)"
            ></button>
          </div>
          <div class="modal-body">
            <slot></slot>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              @click="modal_status.setModalStatus(false)"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
