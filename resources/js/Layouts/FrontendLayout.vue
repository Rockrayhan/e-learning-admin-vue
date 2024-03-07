<script setup>
import { usePage, Link } from "@inertiajs/vue3";
import Footer from '@/Shared/Footer.vue';

const { products, categories, userData } = usePage().props;



const { user, token } = userData;

</script>


<template>
    <div>
        <div>
<!-- ===================    TopBar    =========================-->
      
<section class="bg-primary py-2 d-none d-sm-block">

<div class="container">
  <div class="row align-items-center">
    <div class="col-auto d-none d-lg-block">
      <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>1600 Amphitheatre Parkway, CA 94043 </span></p>
    </div>
    <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
      <ul class="list-unstyled list-inline my-2">
        <li class="list-inline-item"><a class="text-decoration-none" href="/admin/login"> Admin </a></li>
        <li class="list-inline-item"><a class="text-decoration-none" href="/instructor/login"> Instructor </a></li>

      </ul>
    </div>
    <div class="col-auto">
      <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
    </div>
  </div>
</div>
<!--====== Top Bar =======-->

</section>

<!-- ================ Navbar  ============================-->


<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
<div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/logo-n.png" height="45" alt="logo" /></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
  <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
      <li class="nav-item px-2"><Link class="nav-link active" aria-current="page" :href="route('home')">Home</Link></li>
      <li class="nav-item px-2"><Link class="nav-link" aria-current="page" :href="route('about')">About</Link></li>
      <li class="nav-item px-2"><Link class="nav-link" aria-current="page" :href="route('allcourses')">All Courses</Link></li>
      <span v-if="user">
        <a class="btn btn-primary order-1 order-lg-0" href="student/logout">Log Out</a>
        <span class="text-danger"> {{ user.name }} </span>

      </span>
    <span v-else>
      <a class="btn btn-primary order-1 order-lg-0" href="student/login">Sign In</a>
    </span>
</ul>
  </div>
</div>
</nav>
<!-- =============== End Of Navbar  =============================-->
</div>
        <slot />
    


        <Footer />
    </div>
</template>

