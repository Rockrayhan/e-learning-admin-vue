<template>
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
        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
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
<div class="container"><a class="navbar-brand" href="index.html"><img src="/assets/img/gallery/logo-n.png" height="45" alt="logo" /></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
  <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
      <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
      <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="pricing.html">Pricing</a></li>
      <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Web Development</a></li>
      <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">User Research</a></li>
    </ul><a class="btn btn-primary order-1 order-lg-0" href="#!">Sign Up</a>
    <form class="d-flex my-3 d-block d-lg-none">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    <div class="dropdown d-none d-lg-block">
      <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
      <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
        <form>
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
        </form>
      </ul>
    </div>
  </div>
</div>
</nav>

<!-- =============== End Of Navbar  =============================-->

    </div>
</template>

<script>


export default {

}
</script>

<style>

</style>