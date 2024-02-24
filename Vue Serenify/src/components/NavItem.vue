<template>
  <li class="nav-item">
    <a class="nav-link" :href="'/' + link"> {{ label }} </a>
  </li>
</template>
<script>
export default {
  props: {
    label: {
      type: String,
      required: true
    },
    Link: {
      type: String,
      required: true
    }
  }
}
</script>
