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
            <RouterLink to="/">
              <NavItem label="Home"></NavItem>
            </RouterLink>
            <RouterLink to="about">
              <NavItem label="Tentang Kami"></NavItem>
            </RouterLink>
            <RouterLink to="product">
              <NavItem label="Solusi Untukmu"></NavItem>
            </RouterLink>
          </ul>
        </div>
        <div class="col-sm-1">
          <RouterLink to="login">
            <button type="submit" class="btn btn-primary">Langganan</button>
          </RouterLink>
        </div>
      </div>
    </div>
  </nav>
</template>
