<script setup>
import NavItem from './NavItem.vue'
</script>
<template>
  <nav class="sticky-top bg-body-tertiary shadow p-1 mb-5 bg-white rounded">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-1">
          <h3><b>Serenify</b></h3>
        </div>
        <div class="col-sm-10">
          <ul class="nav justify-content-center">
            <RouterLink to="login">
              <NavItem label="Tentang Kami"></NavItem>
            </RouterLink>

            <NavItem label="Solusi Untukmu"></NavItem>
          </ul>
        </div>
        <div class="col-sm-1">
          <form action="">
            <button type="button" class="btn btn-primary">Langganan</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</template>
