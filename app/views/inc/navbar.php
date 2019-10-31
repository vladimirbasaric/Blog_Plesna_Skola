<nav class="navbar navbar-expand-md navbar-light bg-light p-0 pl-3 text-uppercase font-weight-bold">
  <a class="navbar-brand" href="<?php echo URLROOT; ?>">
    <!-- <img src="../public/img/dance.jpg" alt="logo"> -->UMD
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>">Početna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">O nama</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/gallery">Galerija</a>
      </li>
     <!-- Ulazak na blog je moguc samo ako je korisnik registrovan -->
     <?php if(isset($_SESSION['user_id'])) : ?>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/posts/">Blog</a>
      </li>
      <?php else : ?>
      <li class="nav-item ml-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Blog</a>
      </li>
      <?php endif; ?>
    </ul>

    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#"><?php echo $_SESSION['user_name']; ?></a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Izlogujte se</a>
      </li>
      <?php else : ?>
      <li class="nav-item mr-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Registrujte se</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Ulogujte se</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>