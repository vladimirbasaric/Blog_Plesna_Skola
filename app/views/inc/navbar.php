<!-- Navbar preuzet sa https://getbootstrap.com/docs/4.3/components/navbar/-->
<nav class="navbar navbar-expand-md navbar-light bg-light p-0 pl-3 text-uppercase  font-weight-bold">
  <a class="navbar-brand" href="<?php echo URLROOT; ?>/pages/">
    <img src="../public/img/dance.jpg" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/">Početna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">O nama</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/gallery">Galerija</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/blog">Blog</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Registrujte se</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Ulogujte se</a>
      </li>
    </ul>
  </div>
</nav>