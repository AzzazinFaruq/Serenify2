import { defineStore } from 'pinia'

export const useModalStatus = defineStore('modal_status', {
  state: () => ({
    modal_status: false
  }),
  getters: {
    getModalStatus(state) {
      return state.modal_status
    }
  },
  actions: {
    setModalStatus(status) {
      this.modal_status = status
    }
  }
})
