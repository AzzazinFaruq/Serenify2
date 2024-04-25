<script setup>
import navbar from '../components/AdminTemp/Navbar.vue'
import sidebar from '../components/AdminTemp/Sidebar.vue'
</script>
<template>
  p
  <div>
    <navbar></navbar>
    <sidebar></sidebar>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Selamat Datang</h5>

                  <p class="card-text">Website Sistem Informasi Perpustakaan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
