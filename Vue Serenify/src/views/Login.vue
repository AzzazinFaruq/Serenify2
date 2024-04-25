<script setup>
import Temp from '../components/TemplateLog.vue'
</script>

<template>
  <div style="text-align: center">
    <form v-on:submit.prevent="addItem">
      <p>
        What do you need?
        <input type="text" required placeholder="item name.." v-model="itemName" />
      </p>
      <p>
        How many?
        <input type="number" placeholder="number of items.." v-model="itemNumber" />
      </p>
      <button type="submit">Add item</button>
    </form>
  </div>
</template>
