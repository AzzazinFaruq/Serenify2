<script setup>
import Temp from '../components/TemplateLog.vue'
</script>

<template>
  <div></div>
  <div style="text-align: center">
    <h2>Halo!</h2>
    <form>
      <div class="form-group marginform top">
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Alamat Email atau Nomer Telepon"
        />
        <div class="form-group top">
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Kata Sandi"
          />
        </div>
      </div>
      <div class="form-check"></div>
      <button type="submit" class="btn btn-xl btn-primary paddingsubmit">Submit</button>
    </form>
    <p class="top">Belum punya akun? <a class="a1" href="">daftar</a></p>
  </div>
</template>
<style scooped>
.marginform {
  margin-left: 40%;
  margin-right: 40%;
}
.top {
  margin-top: 30px;
}
.paddingsubmit {
  padding: 100%;
}
.btn-xl {
  padding: 7px 20px !important;
  font-size: 15px !important;
  border-radius: 10px !important ;
  /* Specify your width here */
  width: 20%;
  border-radius: 5px !important;
}
.a1 {
  text-decoration: none !important;
  --bs-nav-link-color: #be79df !important;
  --bs-nav-link-hover-color: #8d5ba6 !important;
  color: #be79df !important;
}
</style>
